<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e1a16bb42aa235fee23d231a4765adf
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e1a16bb42aa235fee23d231a4765adf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e1a16bb42aa235fee23d231a4765adf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
