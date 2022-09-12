<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75884e65b4519cfb586d2f3ff4e1296f
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nathantudc\\Jdsdk\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nathantudc\\Jdsdk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75884e65b4519cfb586d2f3ff4e1296f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75884e65b4519cfb586d2f3ff4e1296f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75884e65b4519cfb586d2f3ff4e1296f::$classMap;

        }, null, ClassLoader::class);
    }
}
