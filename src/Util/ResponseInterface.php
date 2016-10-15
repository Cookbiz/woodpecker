<?php
/**
 * Created by PhpStorm.
 * User: tomotomo
 * Date: 2016/10/15
 * Time: 14:54
 */

namespace Cookbiz\Woodpecker\Util;

/**
 * Interface ResponseInterface
 * @package Cookbiz\Woodpecker\Util
 *
 * @property string status
 */
interface ResponseInterface
{
    public function getStatus();
}
