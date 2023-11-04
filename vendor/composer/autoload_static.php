<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14a1056359aa339522b4855a92e70a93
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'muyomu\\log4p\\' => 13,
            'muyomu\\database\\mysql\\' => 22,
            'muyomu\\config\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'muyomu\\log4p\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/log4p/src',
        ),
        'muyomu\\database\\mysql\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'muyomu\\config\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/config/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14a1056359aa339522b4855a92e70a93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14a1056359aa339522b4855a92e70a93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit14a1056359aa339522b4855a92e70a93::$classMap;

        }, null, ClassLoader::class);
    }
}