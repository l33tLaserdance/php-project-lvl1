<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8aaf7b395e4af61942f9e67156b1e93d
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'bda688e60a435d5e3403fd57dcfe9dfa' => __DIR__ . '/../..' . '/src/cli.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Php\\Package\\Tests\\' => 18,
            'Php\\Package\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Php\\Package\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Php\\Package\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8aaf7b395e4af61942f9e67156b1e93d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8aaf7b395e4af61942f9e67156b1e93d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8aaf7b395e4af61942f9e67156b1e93d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}