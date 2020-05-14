<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98c1c18d6c4546d6254109e6859032fb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98c1c18d6c4546d6254109e6859032fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98c1c18d6c4546d6254109e6859032fb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}