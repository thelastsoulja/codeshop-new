<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_EnvelopeListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'mailer.envelope_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\EnvelopeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/EventListener/EnvelopeListener.php';

        return $container->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL);
    }
}
