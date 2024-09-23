<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b1b639d25e3f301a86ad9865ad517d0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Payu\\PaymentGateway\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Payu\\PaymentGateway\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Payu',
        ),
    );

    public static $classMap = array (
        'AuthType' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/AuthType/AuthType.php',
        'AuthType_Basic' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/AuthType/Basic.php',
        'AuthType_Oauth' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/AuthType/Oauth.php',
        'AuthType_TokenRequest' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/AuthType/TokenRequest.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OauthCacheFile' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Oauth/Cache/OauthCacheFile.php',
        'OauthCacheInterface' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Oauth/Cache/OauthCacheInterface.php',
        'OauthCacheMemcached' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Oauth/Cache/OauthCacheMemcached.php',
        'OauthGrantType' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Oauth/OauthGrantType.php',
        'OauthResultClientCredentials' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Oauth/OauthResultClientCredentials.php',
        'OpenPayU' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayU.php',
        'OpenPayU_Configuration' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Configuration.php',
        'OpenPayU_Exception' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayUException.php',
        'OpenPayU_Exception_Authorization' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayUException.php',
        'OpenPayU_Exception_Configuration' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayUException.php',
        'OpenPayU_Exception_Network' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayUException.php',
        'OpenPayU_Exception_Request' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayUException.php',
        'OpenPayU_Exception_ServerError' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayUException.php',
        'OpenPayU_Exception_ServerMaintenance' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayUException.php',
        'OpenPayU_Http' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Http.php',
        'OpenPayU_HttpCurl' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/HttpCurl.php',
        'OpenPayU_Oauth' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Oauth/Oauth.php',
        'OpenPayU_Order' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/v2/Order.php',
        'OpenPayU_Refund' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/v2/Refund.php',
        'OpenPayU_Result' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Result.php',
        'OpenPayU_Retrieve' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/v2/Retrieve.php',
        'OpenPayU_Shop' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/v2/Shop.php',
        'OpenPayU_Token' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/v2/Token.php',
        'OpenPayU_Util' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Util.php',
        'OpenPayuOrderStatus' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayuOrderStatus.php',
        'OpenPayuRefundStatus' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/OpenPayuRefundStatus.php',
        'PayuShop' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Model/PayuShop.php',
        'PayuShopBalance' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/Model/PayuShop/PayuShopBalance.php',
        'Payu\\PaymentGateway\\Blocks\\PayuBlikBlock' => __DIR__ . '/../..' . '/Payu/Blocks/PayuBlikBlock.php',
        'Payu\\PaymentGateway\\Blocks\\PayuBlocks' => __DIR__ . '/../..' . '/Payu/Blocks/PayuBlocks.php',
        'Payu\\PaymentGateway\\Blocks\\PayuCreditCardBlock' => __DIR__ . '/../..' . '/Payu/Blocks/PayuCreditCardBlock.php',
        'Payu\\PaymentGateway\\Blocks\\PayuInstallmentsBlock' => __DIR__ . '/../..' . '/Payu/Blocks/PayuInstallmentsBlock.php',
        'Payu\\PaymentGateway\\Blocks\\PayuKlarnaBlock' => __DIR__ . '/../..' . '/Payu/Blocks/PayuKlarnaBlock.php',
        'Payu\\PaymentGateway\\Blocks\\PayuListBanksBlock' => __DIR__ . '/../..' . '/Payu/Blocks/PayuListBanksBlock.php',
        'Payu\\PaymentGateway\\Blocks\\PayuPaypoBlock' => __DIR__ . '/../..' . '/Payu/Blocks/PayuPaypoBlock.php',
        'Payu\\PaymentGateway\\Blocks\\PayuSecureFormBlock' => __DIR__ . '/../..' . '/Payu/Blocks/PayuSecureFormBlock.php',
        'Payu\\PaymentGateway\\Blocks\\PayuStandardBlock' => __DIR__ . '/../..' . '/Payu/Blocks/PayuStandardBlock.php',
        'Payu\\PaymentGateway\\Blocks\\PayuTwistoPlBlock' => __DIR__ . '/../..' . '/Payu/Blocks/PayuTwistoPlBlock.php',
        'Payu\\PaymentGateway\\Cache\\OauthCache' => __DIR__ . '/../..' . '/Payu/Cache/OauthCache.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Gateway_PayuBlik' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Gateway_PayuBlik.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Gateway_PayuCreditCard' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Gateway_PayuCreditCard.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Gateway_PayuInstallments' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Gateway_PayuInstallments.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Gateway_PayuKlarna' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Gateway_PayuKlarna.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Gateway_PayuListBanks' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Gateway_PayuListBanks.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Gateway_PayuPaypo' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Gateway_PayuPaypo.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Gateway_PayuSecureForm' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Gateway_PayuSecureForm.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Gateway_PayuStandard' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Gateway_PayuStandard.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Gateway_PayuTwistoPl' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Gateway_PayuTwistoPl.php',
        'Payu\\PaymentGateway\\Gateways\\WC_PayuGateway' => __DIR__ . '/../..' . '/Payu/Gateways/WC_PayuGateway.php',
        'Payu\\PaymentGateway\\Gateways\\WC_Payu_Gateways' => __DIR__ . '/../..' . '/Payu/Gateways/WC_Payu_Gateways.php',
        'Payu\\PaymentGateway\\Settings\\PayuSettings' => __DIR__ . '/../..' . '/Payu/Settings/PayuSettings.php',
        'ResultError' => __DIR__ . '/..' . '/openpayu/openpayu/lib/OpenPayU/ResultError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b1b639d25e3f301a86ad9865ad517d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b1b639d25e3f301a86ad9865ad517d0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b1b639d25e3f301a86ad9865ad517d0::$classMap;

        }, null, ClassLoader::class);
    }
}
