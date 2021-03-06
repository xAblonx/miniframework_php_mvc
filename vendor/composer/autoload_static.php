<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd105bf1683d819bdc30c463b3578a90a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd105bf1683d819bdc30c463b3578a90a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd105bf1683d819bdc30c463b3578a90a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
