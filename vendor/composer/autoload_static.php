<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27ae33a58e56550f0fd0ae9ff16605b6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Media_Tracker\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Media_Tracker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit27ae33a58e56550f0fd0ae9ff16605b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27ae33a58e56550f0fd0ae9ff16605b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27ae33a58e56550f0fd0ae9ff16605b6::$classMap;

        }, null, ClassLoader::class);
    }
}
