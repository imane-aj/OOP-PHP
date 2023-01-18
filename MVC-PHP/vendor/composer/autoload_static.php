<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit883abf088ee9fdd9645126a03e3b1fad
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit883abf088ee9fdd9645126a03e3b1fad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit883abf088ee9fdd9645126a03e3b1fad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit883abf088ee9fdd9645126a03e3b1fad::$classMap;

        }, null, ClassLoader::class);
    }
}
