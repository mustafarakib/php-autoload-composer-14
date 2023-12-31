<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9293d8cd15dd19abdb9b7a2dd38cc2f2
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tap\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tap\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/BITM/SEIP_161193',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/BITM/SEIP_161193',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9293d8cd15dd19abdb9b7a2dd38cc2f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9293d8cd15dd19abdb9b7a2dd38cc2f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
