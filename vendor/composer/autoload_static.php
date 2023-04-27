<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit567fa3f555de8fd218dfdc1688bb97b5_betaⓥ3_1_5
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Automattic\\JetpackBeta\\Admin' => __DIR__ . '/../..' . '/src/class-admin.php',
        'Automattic\\JetpackBeta\\AutoupdateSelf' => __DIR__ . '/../..' . '/src/class-autoupdateself.php',
        'Automattic\\JetpackBeta\\CliCommand' => __DIR__ . '/../..' . '/src/class-clicommand.php',
        'Automattic\\JetpackBeta\\Hooks' => __DIR__ . '/../..' . '/src/class-hooks.php',
        'Automattic\\JetpackBeta\\ParsedownExt' => __DIR__ . '/../..' . '/src/class-parsedownext.php',
        'Automattic\\JetpackBeta\\Plugin' => __DIR__ . '/../..' . '/src/class-plugin.php',
        'Automattic\\JetpackBeta\\PluginDataException' => __DIR__ . '/../..' . '/src/class-plugindataexception.php',
        'Automattic\\JetpackBeta\\Utils' => __DIR__ . '/../..' . '/src/class-utils.php',
        'Automattic\\Jetpack\\Admin_UI\\Admin_Menu' => __DIR__ . '/..' . '/automattic/jetpack-admin-ui/src/class-admin-menu.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Composer\\Semver\\Comparator' => __DIR__ . '/..' . '/composer/semver/src/Comparator.php',
        'Composer\\Semver\\CompilingMatcher' => __DIR__ . '/..' . '/composer/semver/src/CompilingMatcher.php',
        'Composer\\Semver\\Constraint\\Bound' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Bound.php',
        'Composer\\Semver\\Constraint\\Constraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Constraint.php',
        'Composer\\Semver\\Constraint\\ConstraintInterface' => __DIR__ . '/..' . '/composer/semver/src/Constraint/ConstraintInterface.php',
        'Composer\\Semver\\Constraint\\MatchAllConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MatchAllConstraint.php',
        'Composer\\Semver\\Constraint\\MatchNoneConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MatchNoneConstraint.php',
        'Composer\\Semver\\Constraint\\MultiConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MultiConstraint.php',
        'Composer\\Semver\\Interval' => __DIR__ . '/..' . '/composer/semver/src/Interval.php',
        'Composer\\Semver\\Intervals' => __DIR__ . '/..' . '/composer/semver/src/Intervals.php',
        'Composer\\Semver\\Semver' => __DIR__ . '/..' . '/composer/semver/src/Semver.php',
        'Composer\\Semver\\VersionParser' => __DIR__ . '/..' . '/composer/semver/src/VersionParser.php',
        'Parsedown' => __DIR__ . '/..' . '/erusev/parsedown/Parsedown.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit567fa3f555de8fd218dfdc1688bb97b5_betaⓥ3_1_5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit567fa3f555de8fd218dfdc1688bb97b5_betaⓥ3_1_5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit567fa3f555de8fd218dfdc1688bb97b5_betaⓥ3_1_5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit567fa3f555de8fd218dfdc1688bb97b5_betaⓥ3_1_5::$classMap;

        }, null, ClassLoader::class);
    }
}
