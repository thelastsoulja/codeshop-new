<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarContextService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Calendar\Tests\Behat\Context\Domain\CalendarContext' shared service.
     *
     * @return \Sylius\Calendar\Tests\Behat\Context\Domain\CalendarContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/calendar/tests/Behat/Context/Domain/CalendarContext.php';

        return $container->services['Sylius\\Calendar\\Tests\\Behat\\Context\\Domain\\CalendarContext'] = new \Sylius\Calendar\Tests\Behat\Context\Domain\CalendarContext(($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] ?? ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] = new \Sylius\Calendar\Tests\Behat\Provider\FakeCalendar(\dirname(__DIR__, 4)))));
    }
}
