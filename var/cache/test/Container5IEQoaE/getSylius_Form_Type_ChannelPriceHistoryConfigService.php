<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ChannelPriceHistoryConfigService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.channel_price_history_config' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\ChannelPriceHistoryConfigType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataMapperInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Type/ChannelPriceHistoryConfigType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/DataMapper/DataMapper.php';

        return $container->services['sylius.form.type.channel_price_history_config'] = new \Sylius\Bundle\CoreBundle\Form\Type\ChannelPriceHistoryConfigType(new \Symfony\Component\Form\Extension\Core\DataMapper\DataMapper(), 'Sylius\\Component\\Core\\Model\\ChannelPriceHistoryConfig', $container->parameters['sylius.form.type.channel_price_history_config.validation_groups']);
    }
}