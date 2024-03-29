<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7422faf8f33d1f1cdfca8767e0ffc0f4
{
    public static $files = array (
        'e39a8b23c42d4e1452234d762b03835a' => __DIR__ . '/..' . '/ramsey/uuid/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'clases\\' => 7,
            'cl\\' => 3,
        ),
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
            'Ramsey\\Collection\\' => 18,
        ),
        'P' => 
        array (
            'Paddle\\' => 7,
        ),
        'B' => 
        array (
            'Brick\\Math\\' => 11,
        ),
        'A' => 
        array (
            'AbstractClasses\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'clases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public/php/OOP/InterfacesPolymorphism/clases',
        ),
        'cl\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public/php/OOP/PaymentGateway/clases',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Ramsey\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/collection/src',
        ),
        'Paddle\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public/php/OOP/EncapsulationAndAbstraction/paddle',
        ),
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
        'AbstractClasses\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public/php/OOP/AbstractClasses/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7422faf8f33d1f1cdfca8767e0ffc0f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7422faf8f33d1f1cdfca8767e0ffc0f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7422faf8f33d1f1cdfca8767e0ffc0f4::$classMap;

        }, null, ClassLoader::class);
    }
}
