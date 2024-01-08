<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Twig/templates/'), 1 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'), 2 => (\dirname(__DIR__, 4).'/templates'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ColorType.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 14 => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Authenticator/JWTAuthenticator.php'), 15 => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Authenticator/ForwardCompatAuthenticatorTrait.php'), 16 => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationFailureHandler.php'), 17 => (\dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/JsonLoginAuthenticator.php'), 18 => (\dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Installer/Requirement/SettingsRequirements.php'), 19 => (\dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Installer/Requirement/ExtensionsRequirements.php'), 20 => (\dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Installer/Requirement/FilesystemRequirements.php'), 21 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/FlashHelper.php'), 22 => (\dirname(__DIR__, 4).'/src/Sylius/Bundle/PayumBundle/Provider/PaymentDescriptionProvider.php'), 23 => (\dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/FormErrorHandler.php'), 24 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 25 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 26 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 27 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php')], []);

        $instance->setName('debug:translation');
        $instance->setDescription('Display translation messages information');

        return $instance;
    }
}
