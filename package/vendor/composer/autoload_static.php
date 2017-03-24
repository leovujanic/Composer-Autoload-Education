<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbde0961d18e4b3c52412c82e49fa6169
{
    public static $files = array (
        'b6fdcfcd4f9add9aaaad03a6a8630631' => __DIR__ . '/../..' . '/src/functions/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'degordian\\' => 10,
        ),
        'A' => 
        array (
            'Aura\\Web\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'degordian\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/degordian',
        ),
        'Aura\\Web\\' => 
        array (
            0 => __DIR__ . '/../..' . '/path/to/aura-web/src',
        ),
    );

    public static $classMap = array (
        'Aura\\Web\\Response\\Status' => __DIR__ . '/../..' . '/path/to/aura-web/src/Response/Status.php',
        'BobiClass' => __DIR__ . '/../..' . '/src/classmap/BobiClass.php',
        'BobiIRudiClass' => __DIR__ . '/../..' . '/src/classmap/helpers/RudiClass.php',
        'GlupsonClass' => __DIR__ . '/../..' . '/src/classmap/GlupsonClass.php',
        'KikiClass' => __DIR__ . '/../..' . '/src/classmap/helpers/KikiClass.php',
        'RudiClass' => __DIR__ . '/../..' . '/src/classmap/helpers/RudiClass.php',
        'StupidVendor' => __DIR__ . '/../..' . '/src/some-stupid-vendor/StupidVendor.php',
        'degordian\\backend\\Developer' => __DIR__ . '/../..' . '/src/degordian/backend/Developer.php',
        'degordian\\backend\\SeniorDeveloper' => __DIR__ . '/../..' . '/src/degordian/backend/SeniorDeveloper.php',
        'degordian\\frontend\\Developer' => __DIR__ . '/../..' . '/src/degordian/frontend/Developer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbde0961d18e4b3c52412c82e49fa6169::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbde0961d18e4b3c52412c82e49fa6169::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbde0961d18e4b3c52412c82e49fa6169::$classMap;

        }, null, ClassLoader::class);
    }
}