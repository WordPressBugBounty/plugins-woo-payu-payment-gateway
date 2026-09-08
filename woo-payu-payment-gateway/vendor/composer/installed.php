<?php return array(
    'root' => array(
        'name' => 'payu/payment_gateway',
        'pretty_version' => '2.10.3',
        'version' => '2.10.3.0',
        'reference' => null,
        'type' => 'woocommerce-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'openpayu/openpayu' => array(
            'pretty_version' => '2.4.2',
            'version' => '2.4.2.0',
            'reference' => 'f6fb871d373b5b2f451608206771d2da7a2cd67d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../openpayu/openpayu',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'payu/payment_gateway' => array(
            'pretty_version' => '2.10.3',
            'version' => '2.10.3.0',
            'reference' => null,
            'type' => 'woocommerce-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
