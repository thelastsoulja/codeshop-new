<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ShopUserProvider_EmailOrNameBasedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.shop_user_provider.email_or_name_based' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['sylius.shop_user_provider.email_or_name_based'] = $container->createProxy('UsernameOrEmailProvider_3eaa26a', function () use ($container) {
                return \UsernameOrEmailProvider_3eaa26a::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Provider/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Provider/AbstractUserProvider.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Provider/UsernameOrEmailProvider.php';

        return new \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider('Sylius\\Component\\Core\\Model\\ShopUser', ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')), ($container->services['sylius.canonicalizer'] ?? ($container->services['sylius.canonicalizer'] = new \Sylius\Component\User\Canonicalizer\Canonicalizer())));
    }
}
