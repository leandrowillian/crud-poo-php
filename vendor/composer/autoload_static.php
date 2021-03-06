<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15fc21010a87f2127e005587b9c992b6
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15fc21010a87f2127e005587b9c992b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15fc21010a87f2127e005587b9c992b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15fc21010a87f2127e005587b9c992b6::$classMap;

        }, null, ClassLoader::class);
    }
}
