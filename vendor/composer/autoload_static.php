<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit772f13456716103f26d1fb37c52d3b7e
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit772f13456716103f26d1fb37c52d3b7e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit772f13456716103f26d1fb37c52d3b7e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
