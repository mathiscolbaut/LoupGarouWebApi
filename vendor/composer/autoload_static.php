<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit081f9866b331269ad33393371ac3742a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Asset\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Asset\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/asset',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit081f9866b331269ad33393371ac3742a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit081f9866b331269ad33393371ac3742a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit081f9866b331269ad33393371ac3742a::$classMap;

        }, null, ClassLoader::class);
    }
}
