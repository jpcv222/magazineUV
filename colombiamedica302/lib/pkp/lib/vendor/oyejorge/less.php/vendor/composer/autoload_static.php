<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb58607aea11ddf1c3e34c1bb0aec405e
{
    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'Less' => 
            array (
                0 => __DIR__ . '/../..' . '/lib',
            ),
        ),
    );

    public static $classMap = array (
        'lessc' => __DIR__ . '/../..' . '/lessc.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitb58607aea11ddf1c3e34c1bb0aec405e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb58607aea11ddf1c3e34c1bb0aec405e::$classMap;

        }, null, ClassLoader::class);
    }
}
