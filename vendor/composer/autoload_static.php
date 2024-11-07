<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88d8b1e20f1a90b1e9db84183ec731aa
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GoDaddy\\WooCommerce\\Poynt\\' => 26,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GoDaddy\\WooCommerce\\Poynt\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88d8b1e20f1a90b1e9db84183ec731aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88d8b1e20f1a90b1e9db84183ec731aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88d8b1e20f1a90b1e9db84183ec731aa::$classMap;

        }, null, ClassLoader::class);
    }
}
