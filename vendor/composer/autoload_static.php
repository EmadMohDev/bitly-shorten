<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52f5feb52a0250f7594fb4533f1a6cd5
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Emadmohameddev\\BitlyShorten\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Emadmohameddev\\BitlyShorten\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit52f5feb52a0250f7594fb4533f1a6cd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52f5feb52a0250f7594fb4533f1a6cd5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52f5feb52a0250f7594fb4533f1a6cd5::$classMap;

        }, null, ClassLoader::class);
    }
}