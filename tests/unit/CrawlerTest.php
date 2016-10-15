<?php
namespace Cookbiz\Woodpecker\Tests\Unit;

use Cookbiz\Woodpecker\Crawler;

class CrawlerTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /** @var  Crawler */
    private $crawler;

    protected function _before()
    {
        $this->crawler = new Crawler();
    }

    protected function _after()
    {
    }

    /**
     * @test
     */
    public function demo()
    {
        $this->crawler->setRequestUri('https://google.co.jp')->grabLinks();
        codecept_debug($this->crawler->requestUri);
        codecept_debug($this->crawler->responseUri);
        codecept_debug($this->crawler->response->getStatus());
    }

    /**
     * @expectedException \Exception
     */
    public function testException()
    {
        $this->crawler->grabLinks();
    }
}
