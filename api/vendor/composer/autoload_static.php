<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55f1cfa31919302bf50efc2120a28b6c
{
    public static $files = array (
        '09fdfe9470d54d915778b69fe1693b9b' => __DIR__ . '/../..' . '/App/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55f1cfa31919302bf50efc2120a28b6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55f1cfa31919302bf50efc2120a28b6c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55f1cfa31919302bf50efc2120a28b6c::$classMap;

        }, null, ClassLoader::class);
    }
}