<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Mailer_OrderEmailManagerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.mailer.order_email_manager' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Mailer\OrderEmailManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Mailer/OrderEmailManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Mailer/OrderEmailManager.php';

        $a = ($container->services['sylius.email_sender'] ?? $container->load('getSylius_EmailSenderService'));

        if (isset($container->services['sylius.mailer.order_email_manager'])) {
            return $container->services['sylius.mailer.order_email_manager'];
        }

        return $container->services['sylius.mailer.order_email_manager'] = new \Sylius\Bundle\CoreBundle\Mailer\OrderEmailManager($a);
    }
}
