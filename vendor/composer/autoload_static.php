<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit892c2b6a4e5b3a44084e662c62c2f418
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Viriusapi\\Viri\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Viriusapi\\Viri\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit892c2b6a4e5b3a44084e662c62c2f418::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit892c2b6a4e5b3a44084e662c62c2f418::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit892c2b6a4e5b3a44084e662c62c2f418::$classMap;

        }, null, ClassLoader::class);
    }
}
