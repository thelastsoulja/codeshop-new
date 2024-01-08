<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Setup_PaymentService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.setup.payment' shared service.
     *
     * @return \Sylius\Behat\Context\Setup\PaymentContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Setup/PaymentContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.setup.payment'] = new \Sylius\Behat\Context\Setup\PaymentContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->services['sylius.repository.payment_method'] ?? $container->getSylius_Repository_PaymentMethodService()), ($container->services['sylius.fixture.example_factory.payment_method'] ?? $container->load('getSylius_Fixture_ExampleFactory_PaymentMethodService')), ($container->services['sylius.factory.payment_method_translation'] ?? ($container->services['sylius.factory.payment_method_translation'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation'))), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ['offline' => 'Offline', 'paypal_express_checkout' => 'Paypal Express Checkout', 'stripe_checkout' => 'Stripe Checkout']);
    }
}