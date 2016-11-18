<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ec9bc345fd1e0c8e572dad8ed8c1500
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetzWeb\\Instagram\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetzWeb\\Instagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/cosenary/instagram/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ec9bc345fd1e0c8e572dad8ed8c1500::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ec9bc345fd1e0c8e572dad8ed8c1500::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
