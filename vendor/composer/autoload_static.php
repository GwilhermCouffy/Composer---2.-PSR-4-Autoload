<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4e1349995a6bef747544f822d5ef422
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gwilh\\Composer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gwilh\\Composer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4e1349995a6bef747544f822d5ef422::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4e1349995a6bef747544f822d5ef422::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4e1349995a6bef747544f822d5ef422::$classMap;

        }, null, ClassLoader::class);
    }
}
