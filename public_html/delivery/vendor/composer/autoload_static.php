<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1a1a2436bd15dd02ddb8e14e09ddb13
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite1a1a2436bd15dd02ddb8e14e09ddb13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1a1a2436bd15dd02ddb8e14e09ddb13::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}