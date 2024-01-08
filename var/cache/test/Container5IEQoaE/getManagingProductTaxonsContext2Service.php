<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManagingProductTaxonsContext2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Behat\Context\Ui\Admin\ManagingProductTaxonsContext' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ManagingProductTaxonsContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ManagingProductTaxonsContext.php';

        return $container->services['Sylius\\Behat\\Context\\Ui\\Admin\\ManagingProductTaxonsContext'] = new \Sylius\Behat\Context\Ui\Admin\ManagingProductTaxonsContext(($container->privates['sylius.behat.page.admin.product.update_simple'] ?? $container->load('getSylius_Behat_Page_Admin_Product_UpdateSimpleService')));
    }
}
