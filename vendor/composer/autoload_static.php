<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8fffac16964a774a42dcd3ded3a45bd
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Compiler\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Compiler\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8fffac16964a774a42dcd3ded3a45bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8fffac16964a774a42dcd3ded3a45bd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
