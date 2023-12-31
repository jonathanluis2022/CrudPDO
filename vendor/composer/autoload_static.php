<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd6aa493e6a15ccb187d29ab7f82fcb9
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd6aa493e6a15ccb187d29ab7f82fcb9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd6aa493e6a15ccb187d29ab7f82fcb9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd6aa493e6a15ccb187d29ab7f82fcb9::$classMap;

        }, null, ClassLoader::class);
    }
}
