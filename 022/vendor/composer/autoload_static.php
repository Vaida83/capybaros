<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b3b59beeb3e518fcb8f8874607e06e2
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Visai\\Kitas\\Dalykas\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Visai\\Kitas\\Dalykas\\' => 
        array (
            0 => '/d2-folderis',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b3b59beeb3e518fcb8f8874607e06e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b3b59beeb3e518fcb8f8874607e06e2::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit0b3b59beeb3e518fcb8f8874607e06e2::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit0b3b59beeb3e518fcb8f8874607e06e2::$classMap;

        }, null, ClassLoader::class);
    }
}