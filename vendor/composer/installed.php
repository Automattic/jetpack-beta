<?php return array(
    'root' => array(
        'name' => 'automattic/jetpack-beta',
        'pretty_version' => 'dev-trunk',
        'version' => 'dev-trunk',
        'reference' => null,
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-admin-ui' => array(
            'pretty_version' => '0.4.4',
            'version' => '0.4.4.0',
            'reference' => 'a1903cbfe6971be4541f2aa198c9129e55e96f2d',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-admin-ui',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '3.0.10',
            'version' => '3.0.10.0',
            'reference' => 'b2a953a551fb61986976b7403335c300f808e3b3',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-beta' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'reference' => null,
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'composer/semver' => array(
            'pretty_version' => '3.3.2',
            'version' => '3.3.2.0',
            'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
            'type' => 'library',
            'install_path' => __DIR__ . '/./semver',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'erusev/parsedown' => array(
            'pretty_version' => '1.7.4',
            'version' => '1.7.4.0',
            'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
            'type' => 'library',
            'install_path' => __DIR__ . '/../erusev/parsedown',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
