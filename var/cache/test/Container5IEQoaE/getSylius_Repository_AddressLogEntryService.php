<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_AddressLogEntryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.repository.address_log_entry' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Doctrine\ORM\ResourceLogEntryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Doctrine/ORM/ResourceLogEntryRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Doctrine/ORM/ResourceLogEntryRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.repository.address_log_entry'])) {
            return $container->services['sylius.repository.address_log_entry'];
        }

        return $container->services['sylius.repository.address_log_entry'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\ResourceLogEntryRepository($a, $a->getClassMetadata('Sylius\\Component\\Addressing\\Model\\AddressLogEntry'));
    }
}
