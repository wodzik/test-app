<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c4feda0beee02b18decc4f7370a3744
{
    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8c4feda0beee02b18decc4f7370a3744::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8c4feda0beee02b18decc4f7370a3744::$classMap;

        }, null, ClassLoader::class);
    }
}
