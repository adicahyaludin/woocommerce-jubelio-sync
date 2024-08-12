<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ea70b244067b4778645923ab0574966
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ea70b244067b4778645923ab0574966::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ea70b244067b4778645923ab0574966::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ea70b244067b4778645923ab0574966::$classMap;

        }, null, ClassLoader::class);
    }
}
