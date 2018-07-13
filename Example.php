<?php
namespace Compiler;

use Compiler\ConcreteClasses\Tokenizer;

require_once __DIR__ . '/vendor/autoload.php';

$input = '(add 21 (subtract 34 12))';

$tokenizer = new Tokenizer();

$tokens = $tokenizer->getTokens($input);

print_r($tokens);