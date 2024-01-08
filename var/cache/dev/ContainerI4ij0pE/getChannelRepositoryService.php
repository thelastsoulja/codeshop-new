<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChannelRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository' shared service.
     *
     * @return \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Channel/Repository/ChannelRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ChannelBundle/Doctrine/ORM/ChannelRepository.php';

        return $container->privates['Sylius\\Bundle\\ChannelBundle\\Doctrine\\ORM\\ChannelRepository'] = $container->get('sylius.repository.channel');
    }
}
