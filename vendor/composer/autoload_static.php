<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e181360df2fac9dcc4aa882469302b6
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Clases\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Clases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e181360df2fac9dcc4aa882469302b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e181360df2fac9dcc4aa882469302b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e181360df2fac9dcc4aa882469302b6::$classMap;

        }, null, ClassLoader::class);
    }
}
