<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1893d57d756d91e2d5d15b8257519f5
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hota1024\\String\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hota1024\\String\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1893d57d756d91e2d5d15b8257519f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1893d57d756d91e2d5d15b8257519f5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}