<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_ChannelCodeCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.channel_code_collection' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Validator\Constraints\ChannelCodeCollectionValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Validator/Constraints/ChannelCodeCollectionValidator.php';

        return $container->services['sylius.validator.channel_code_collection'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\ChannelCodeCollectionValidator(($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()));
    }
}
