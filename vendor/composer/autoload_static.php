<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b9a01b85c762603fed3999e97fdcd80
{
    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
        'I' => 
        array (
            'InstagramScraper' => 
            array (
                0 => __DIR__ . '/..' . '/raiym/instagram-php-scraper/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7b9a01b85c762603fed3999e97fdcd80::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
