<?php
/**
 * Created by PhpStorm.
 * User: tomotomo
 * Date: 2016/10/15
 * Time: 14:08
 */

namespace Cookbiz\Woodpecker;

use Goutte\Client;

class Crawler
{

    /** @var  string */
    public $requestUri;

    /** @var  string */
    public $responseUri;

    /** @var  \Cookbiz\Woodpecker\Util\ResponseInterface */
    public $response;

    /** @var Client */
    private $client;

    /**
     * You can chose output in Database, Log file or any others
     */
    private $output;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param string $uri
     * @return Crawler
     */
    public function setRequestUri($uri)
    {
        $this->requestUri = $uri;

        return $this;
    }


    /**
     * @throws \Exception
     * @return array
     */
    public function grabLinks()
    {
        if (!$this->requestUri) {
            throw new \Exception('use `::setRequestUri` at first');
        }

        $request = $this->client->request('GET', $this->requestUri);
        $this->responseUri = $request->getUri();
        $this->response = $this->client->getResponse();

        // Get text node, href, title in all a tags.
        $aTags = $request->filter('a')->extract(['_text', 'href', 'title']);

        return array_map(function ($a) {
            return [
                'text' => $a[0],
                'href' => $a[1],
                'title' => $a[2]
            ];
        }, $aTags);
    }
}
