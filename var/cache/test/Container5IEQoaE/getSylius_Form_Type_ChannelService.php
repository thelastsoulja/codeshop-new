<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ChannelService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.channel' shared service.
     *
     * @return \Sylius\Bundle\ChannelBundle\Form\Type\ChannelType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ChannelBundle/Form/Type/ChannelType.php';

        return $container->services['sylius.form.type.channel'] = new \Sylius\Bundle\ChannelBundle\Form\Type\ChannelType('Sylius\\Component\\Core\\Model\\Channel', $container->parameters['sylius.form.type.channel.validation_groups']);
    }
}