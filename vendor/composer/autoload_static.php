<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit135dcf091b35c2811c71c8c9eb14619e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit135dcf091b35c2811c71c8c9eb14619e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit135dcf091b35c2811c71c8c9eb14619e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}