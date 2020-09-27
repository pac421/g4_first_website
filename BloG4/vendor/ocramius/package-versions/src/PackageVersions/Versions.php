<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.11.0@0d4e1a8b29dd987704842f0465aded378f441dca',
  'doctrine/doctrine-bundle' => '2.1.2@f5153089993e1230f5d8acbd8e126014d5a63e17',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '2.0.0@1dee036f22cd5dc0bc12132f1d1c38415907be55',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'symfony/asset' => 'v5.1.6@ef0bcafce1c14bbf49838b01e990a8bfafd071eb',
  'symfony/cache' => 'v5.1.5@c31bdd71f30435baff03693e684469c7ecb3ca1a',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.5@22f961ddffdc81389670b2ca74a1cc0213761ec0',
  'symfony/console' => 'v5.1.5@186f395b256065ba9b890c0a4e48a91d598fa2cf',
  'symfony/dependency-injection' => 'v5.1.5@48d6890e12ce9cd8e68aaa4fb72010139312fd73',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.5@31cb4cfe6b9452cc1916022e995a08de4005299a',
  'symfony/dotenv' => 'v5.1.5@42d2a18597f4c7cafc0e25b1ad6a1cbb4f2caf05',
  'symfony/error-handler' => 'v5.1.5@525636d4b84e06c6ca72d96b6856b5b169416e6a',
  'symfony/event-dispatcher' => 'v5.1.5@94871fc0a69c3c5da57764187724cdce0755899c',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/filesystem' => 'v5.1.5@f7b9ed6142a34252d219801d9767dedbd711da1a',
  'symfony/finder' => 'v5.1.5@2b765f0cf6612b3636e738c0689b29aa63088d5d',
  'symfony/flex' => 'v1.9.4@115e67f76ba95d70946a6e0b15d4578bf04927c3',
  'symfony/form' => 'v5.1.5@236d88a28671f9b13860789eabe28e8c4c8bba86',
  'symfony/framework-bundle' => 'v5.1.5@0607ca3cb7b79461a2e6a7c5d05e5cd6d2c14015',
  'symfony/http-foundation' => 'v5.1.5@41a4647f12870e9d41d9a7d72ff0614a27208558',
  'symfony/http-kernel' => 'v5.1.5@3e32676e6cb5d2081c91a56783471ff8a7f7110b',
  'symfony/intl' => 'v5.1.5@b6886c43cc1ae3367c569c5a8d4182555dd694fb',
  'symfony/options-resolver' => 'v5.1.5@9ff59517938f88d90b6e65311fef08faa640f681',
  'symfony/polyfill-intl-grapheme' => 'v1.18.1@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-icu' => 'v1.18.1@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/property-access' => 'v5.1.5@c2a95da4d3b88523d00903a3d04636717766d674',
  'symfony/property-info' => 'v5.1.5@a10524dfdadc418c2e4b52667be7d6421b7da26f',
  'symfony/requirements-checker' => 'v2.0.0@e3d5565eb69a4a2195905c8669f32e988c8e6be0',
  'symfony/routing' => 'v5.1.5@47b0218344cb6af25c93ca8ee1137fafbee5005d',
  'symfony/security-bundle' => 'v5.1.5@c761866b9aa13add16e6f7dec5f40ab85c2a3ad7',
  'symfony/security-core' => 'v5.1.5@0b965da49ccf070764baa2a23bbb926036b6c6b2',
  'symfony/security-csrf' => 'v5.1.5@962323e4db4458d731d5006f14019a22a2f84b06',
  'symfony/security-guard' => 'v5.1.5@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.5@7741021221548e2b5768ec0cf502c91b6c55b209',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.5@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.5@0de4cc1e18bb596226c06a82e2e7e9bc6001a63a',
  'symfony/translation-contracts' => 'v2.2.0@77ce1c3627c9f39643acd9af086631f842c50c4d',
  'symfony/twig-bridge' => 'v5.1.5@4534dbfd47745a924beaa6e7c9d5462993bbd0a5',
  'symfony/twig-bundle' => 'v5.1.5@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/var-dumper' => 'v5.1.5@b43a3905262bcf97b2510f0621f859ca4f5287be',
  'symfony/var-exporter' => 'v5.1.5@eabaabfe1485ca955c5b53307eade15ccda57a15',
  'symfony/yaml' => 'v5.1.5@a44bd3a91bfbf8db12367fa6ffac9c3eb1a8804a',
  'twig/extra-bundle' => 'v3.0.5@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.0.5@9b76b1535483cdf4edf01bb787b0217b62bd68a5',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.4.4@16a03fadb5473f49aad70384002dfd5012fe680e',
  'doctrine/doctrine-fixtures-bundle' => '3.3.2@a2179f447425d9e784fb9bc224e533a0ab083b98',
  'nikic/php-parser' => 'v4.10.0@1c13d05035deff45f1230ca68bd7d74d621762d9',
  'symfony/maker-bundle' => 'v1.21.1@da629093c7bf9abd9a6a0f232a43bbb1b88de68d',
  'symfony/web-profiler-bundle' => 'v5.1.5@57580233309788f66e69ad783989880b1b85c77f',
  'paragonie/random_compat' => '2.*@a733bec9f8a1c426a5212720cea1df5f880e0652',
  'symfony/polyfill-ctype' => '*@a733bec9f8a1c426a5212720cea1df5f880e0652',
  'symfony/polyfill-iconv' => '*@a733bec9f8a1c426a5212720cea1df5f880e0652',
  'symfony/polyfill-php72' => '*@a733bec9f8a1c426a5212720cea1df5f880e0652',
  'symfony/polyfill-php71' => '*@a733bec9f8a1c426a5212720cea1df5f880e0652',
  'symfony/polyfill-php70' => '*@a733bec9f8a1c426a5212720cea1df5f880e0652',
  'symfony/polyfill-php56' => '*@a733bec9f8a1c426a5212720cea1df5f880e0652',
  '__root__' => 'dev-master@a733bec9f8a1c426a5212720cea1df5f880e0652',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
