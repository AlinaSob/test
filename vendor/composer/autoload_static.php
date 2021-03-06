<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8eb06e32f2ac40ecb1c7528c1af375dc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Calculator' => __DIR__ . '/../..' . '/app/Calculator.php',
        'App\\Connector' => __DIR__ . '/../..' . '/app/Connector.php',
        'App\\Controller' => __DIR__ . '/../..' . '/app/Controller.php',
        'App\\FileConnector' => __DIR__ . '/../..' . '/app/FileConnector.php',
        'App\\Interfaces\\InterfaceConnector' => __DIR__ . '/../..' . '/app/Interfaces/InterfaceConnector.php',
        'App\\Interfaces\\InterfaceReader' => __DIR__ . '/../..' . '/app/Interfaces/InterfaceReader.php',
        'App\\Interfaces\\InterfaceWriter' => __DIR__ . '/../..' . '/app/Interfaces/InterfaceWriter.php',
        'App\\JsonReader' => __DIR__ . '/../..' . '/app/JsonReader.php',
        'App\\JsonWriter' => __DIR__ . '/../..' . '/app/JsonWriter.php',
        'App\\Objects\\Result' => __DIR__ . '/../..' . '/app/Objects/Result.php',
        'App\\UrlConnector' => __DIR__ . '/../..' . '/app/UrlConnector.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8eb06e32f2ac40ecb1c7528c1af375dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8eb06e32f2ac40ecb1c7528c1af375dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8eb06e32f2ac40ecb1c7528c1af375dc::$classMap;

        }, null, ClassLoader::class);
    }
}
