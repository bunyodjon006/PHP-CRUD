<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83c62571027d3ea4a1ac4c9890709451
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Core\\Database' => __DIR__ . '/../..' . '/src/Core/Database.php',
        'App\\Core\\Model' => __DIR__ . '/../..' . '/src/Core/Model.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83c62571027d3ea4a1ac4c9890709451::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83c62571027d3ea4a1ac4c9890709451::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit83c62571027d3ea4a1ac4c9890709451::$classMap;

        }, null, ClassLoader::class);
    }
}
