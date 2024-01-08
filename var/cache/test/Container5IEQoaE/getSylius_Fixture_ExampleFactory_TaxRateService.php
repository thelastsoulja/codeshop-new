<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_TaxRateService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.tax_rate' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\TaxRateExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/TaxRateExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.tax_rate'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\TaxRateExampleFactory(($container->services['sylius.factory.tax_rate'] ?? ($container->services['sylius.factory.tax_rate'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\TaxRate'))), ($container->services['sylius.repository.zone'] ?? $container->getSylius_Repository_ZoneService()), ($container->services['sylius.repository.tax_category'] ?? $container->load('getSylius_Repository_TaxCategoryService')));
    }
}
