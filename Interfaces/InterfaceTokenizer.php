<?php
/**
 * Created by PhpStorm.
 * User: zhengxj
 * Date: 2018/7/10
 * Time: 14:45
 */

namespace Compiler\Interfaces;

/**
 * 分词器
 * Class InterfaceTokenizer
 * @package Compiler\Interfaces
 */
interface InterfaceTokenizer
{
    public function getTokens($input);
}