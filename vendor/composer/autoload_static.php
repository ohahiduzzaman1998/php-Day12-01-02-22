<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita19b11bda2e424b1bcf18b13247b802e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita19b11bda2e424b1bcf18b13247b802e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita19b11bda2e424b1bcf18b13247b802e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita19b11bda2e424b1bcf18b13247b802e::$classMap;

        }, null, ClassLoader::class);
    }
}
