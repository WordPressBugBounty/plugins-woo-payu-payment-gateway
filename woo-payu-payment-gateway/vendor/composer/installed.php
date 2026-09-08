<?php return array(
    'root' => array(
        'name' => 'payu/payment_gateway',
        'pretty_version' => '2.11.0',
        'version' => '2.11.0.0',
        'reference' => null,
        'type' => 'woocommerce-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'openpayu/openpayu' => array(
            'pretty_version' => '2.4.4',
            'version' => '2.4.4.0',
            'reference' => '01c311fa27fc4165c52b22db6fc87e30d36f224d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../openpayu/openpayu',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'payu/payment_gateway' => array(
            'pretty_version' => '2.11.0',
            'version' => '2.11.0.0',
            'reference' => null,
            'type' => 'woocommerce-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
