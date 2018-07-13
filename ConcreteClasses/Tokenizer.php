<?php
/**
 * Created by PhpStorm.
 * User: zhengxj
 * Date: 2018/7/10
 * Time: 15:04
 */

namespace Compiler\ConcreteClasses;


use Compiler\Interfaces\InterfaceTokenizer;

class Tokenizer implements InterfaceTokenizer
{
    /**
     * 获取tokens
     * @param $input
     * @return array
     * @throws \Exception
     */
    public function getTokens($input)
    {
        if(!is_string($input)) {
            throw new \Exception('Input must be a string!');
        }
        $tokens = [];
        $current = 0;
        while ($current < strlen($input)) {
            $char = $input[$current];
            //开括号
            if($char == '(') {
                $tokens[] = ['type' => 'paren', 'value' => '('];
                $current ++;
                continue;
            }
            //闭括号
            if($char == ')') {
                $tokens[] = ['type' => 'paren', 'value' => ')'];
                $current ++;
                continue;
            }
            //空格
            $whitespace = '/\s/';
            if(preg_match($whitespace, $char)) {
                $current ++;
                continue;
            }
            //数字
            $number = '/[0-9]/';
            if(preg_match($number, $char)) {
                $value = '';
                while(preg_match($number, $char)) {
                    $value .= $char;
                    $char = $input[++$current];
                }
                $tokens[] = ['type' => 'number', 'value' => $value];
                continue;
            }
            //操作名称
            $letters = '/[a-z]/i';
            if(preg_match($letters, $char)) {
                $value = '';
                while(preg_match($letters, $char)) {
                    $value .= $char;
                    $char = $input[++$current];
                }
                $tokens[] = ['type' => 'name', 'value' => $value];
                continue;
            }
            throw new \Exception('I dont know what this character is: ' . $char);
        }
        return $tokens;
    }
}