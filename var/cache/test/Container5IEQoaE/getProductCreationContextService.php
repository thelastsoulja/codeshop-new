<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCreationContextService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Behat\Context\Ui\Admin\ProductCreationContext' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ProductCreationContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ProductCreationContext.php';

        return $container->services['Sylius\\Behat\\Context\\Ui\\Admin\\ProductCreationContext'] = new \Sylius\Behat\Context\Ui\Admin\ProductCreationContext(($container->privates['sylius.behat.page.admin.product.create_simple'] ?? $container->load('getSylius_Behat_Page_Admin_Product_CreateSimpleService')));
    }
}