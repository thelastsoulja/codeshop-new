<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_PromotionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.promotion' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\PromotionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Repository/PromotionRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Doctrine/ORM/PromotionRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Repository/PromotionRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/PromotionRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.repository.promotion'])) {
            return $container->services['sylius.repository.promotion'];
        }

        return $container->services['sylius.repository.promotion'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\PromotionRepository($a, $a->getClassMetadata('Sylius\\Component\\Core\\Model\\Promotion'));
    }
}
