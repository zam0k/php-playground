<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ddb4923e21bbe1e980649f6d8b6db5a
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zam0k\\PhpMvc\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zam0k\\PhpMvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ddb4923e21bbe1e980649f6d8b6db5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ddb4923e21bbe1e980649f6d8b6db5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ddb4923e21bbe1e980649f6d8b6db5a::$classMap;

        }, null, ClassLoader::class);
    }
}