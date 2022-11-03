<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7744bf938f4f0d401f925ddab4383fe
{
    public static $files = array (
        '164dd6db8b99db2e788a6f662016ee17' => __DIR__ . '/../..' . '/src/helper/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hashing\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hashing\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite7744bf938f4f0d401f925ddab4383fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7744bf938f4f0d401f925ddab4383fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite7744bf938f4f0d401f925ddab4383fe::$classMap;

        }, null, ClassLoader::class);
    }
}
