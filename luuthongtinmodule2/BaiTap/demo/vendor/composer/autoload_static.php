<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45593823965ed10e3c97c5cebf96bb42
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45593823965ed10e3c97c5cebf96bb42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45593823965ed10e3c97c5cebf96bb42::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
