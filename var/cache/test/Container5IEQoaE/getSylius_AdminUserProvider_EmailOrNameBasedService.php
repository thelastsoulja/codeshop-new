<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_AdminUserProvider_EmailOrNameBasedService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.admin_user_provider.email_or_name_based' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['sylius.admin_user_provider.email_or_name_based'] = $container->createProxy('UsernameOrEmailProvider_3eaa26a', function () use ($container) {
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

        return new \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider('Sylius\\Component\\Core\\Model\\AdminUser', ($container->services['sylius.repository.admin_user'] ?? $container->load('getSylius_Repository_AdminUserService')), ($container->services['sylius.canonicalizer'] ?? ($container->services['sylius.canonicalizer'] = new \Sylius\Component\User\Canonicalizer\Canonicalizer())));
    }
}
