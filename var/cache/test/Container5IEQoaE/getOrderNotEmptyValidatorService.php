<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderNotEmptyValidatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\Constraints\OrderNotEmptyValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\OrderNotEmptyValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/Constraints/OrderNotEmptyValidator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\OrderNotEmptyValidator'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\OrderNotEmptyValidator(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()));
    }
}
