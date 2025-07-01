<?php return array(
    'root' => array(
        'name' => 'vladlen/mywebsite',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'phpmailer/phpmailer' => array(
            'pretty_version' => 'v6.9.1',
            'version' => '6.9.1.0',
            'reference' => '039de174cd9c17a8389754d3b877a2ed22743e18',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpmailer/phpmailer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roave/security-advisories' => array(
            'pretty_version' => 'dev-latest',
            'version' => 'dev-latest',
            'reference' => '1b43da6199cab7867f06b52454a256efa743f170',
            'type' => 'metapackage',
            'install_path' => NULL,
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
        'vladlen/mywebsite' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
