<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c43905ef438d65ce50df016b2a3a1f0
{
    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'jdubreville\\dnsimple\\' => 
            array (
                0 => __DIR__ . '/..' . '/jdubreville/dnsimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit4c43905ef438d65ce50df016b2a3a1f0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
