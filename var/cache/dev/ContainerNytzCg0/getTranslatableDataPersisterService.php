<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslatableDataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataPersister\TranslatableDataPersister' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataPersister\TranslatableDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/DataPersister/ResumableDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/DataPersister/TranslatableDataPersister.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataPersister\\TranslatableDataPersister'] = new \Sylius\Bundle\ApiBundle\DataPersister\TranslatableDataPersister(($container->services['sylius.translation_locale_provider.admin'] ?? $container->getSylius_TranslationLocaleProvider_AdminService()));
    }
}
