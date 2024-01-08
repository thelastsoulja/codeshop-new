<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EmailRenderer_Adapter_TwigService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.email_renderer.adapter.twig' shared service.
     *
     * @return \Sylius\Bundle\MailerBundle\Renderer\Adapter\EmailTwigAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Renderer/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Renderer/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Bundle/Renderer/Adapter/EmailTwigAdapter.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->services['sylius.email_renderer.adapter.twig'])) {
            return $container->services['sylius.email_renderer.adapter.twig'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['sylius.email_renderer.adapter.twig'])) {
            return $container->services['sylius.email_renderer.adapter.twig'];
        }

        $container->services['sylius.email_renderer.adapter.twig'] = $instance = new \Sylius\Bundle\MailerBundle\Renderer\Adapter\EmailTwigAdapter($a, $b);

        if ($container->has('event_dispatcher')) {
            $instance->setEventDispatcher($b);
        }

        return $instance;
    }
}
