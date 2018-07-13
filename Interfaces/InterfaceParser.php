<?php
/**
 * Created by PhpStorm.
 * User: zhengxj
 * Date: 2018/7/10
 * Time: 14:46
 */

namespace Compiler\Interfaces;

/**
 * 语法分析器
 * Class InterfaceParser
 * @package Compiler\Interfaces
 */
interface InterfaceParser
{
    public function parse($tokens);
}