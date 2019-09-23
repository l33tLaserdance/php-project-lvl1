<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8aaf7b395e4af61942f9e67156b1e93d
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'bda688e60a435d5e3403fd57dcfe9dfa' => __DIR__ . '/../..' . '/src/cli.php',
        '577de6a89312b5a1dd16864f177b390c' => __DIR__ . '/../..' . '/games/dviglo.php',
        'f67a5c5e1fb33431c13d0f6205eb1242' => __DIR__ . '/../..' . '/games/even.php',
        '37244e13db392203c833bef14a80ca36' => __DIR__ . '/../..' . '/games/calc.php',
        '541f30aaf7223697e14941429c707813' => __DIR__ . '/../..' . '/games/gcd.php',
        '5ad325ed0eff336d3fd69b50482e2c1b' => __DIR__ . '/../..' . '/games/progression.php',
        'fa08ab92ca03c70dff1990cad52b9b7e' => __DIR__ . '/../..' . '/games/prime.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BrainGames\\Games\\' => 17,
            'BrainGames\\Cli\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BrainGames\\Games\\' => 
        array (
            0 => __DIR__ . '/../..' . '/games',
        ),
        'BrainGames\\Cli\\' => 
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
