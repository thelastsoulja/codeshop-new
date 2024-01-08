<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_EmailCheckerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.email_checker' shared service.
     *
     * @return \Sylius\Behat\Service\Checker\EmailChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Checker/EmailCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Checker/EmailChecker.php';

        return $container->services['sylius.behat.email_checker'] = new \Sylius\Behat\Service\Checker\EmailChecker(($container->services['Sylius\\Behat\\Service\\Provider\\EmailMessagesProviderInterface'] ?? $container->load('getEmailMessagesProviderInterfaceService')));
    }
}