<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fe05b27b38198dc52df9b2efa7d449b
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PW\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/hari/pw-module/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fe05b27b38198dc52df9b2efa7d449b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fe05b27b38198dc52df9b2efa7d449b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2fe05b27b38198dc52df9b2efa7d449b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2fe05b27b38198dc52df9b2efa7d449b::$classMap;

        }, null, ClassLoader::class);
    }
}
