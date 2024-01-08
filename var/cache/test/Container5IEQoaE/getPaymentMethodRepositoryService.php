<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentMethodRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\Doctrine\ORM\PaymentMethodRepository' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\PaymentMethodRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentMethodRepository'] = $container->get('sylius.repository.payment_method');
    }
}
