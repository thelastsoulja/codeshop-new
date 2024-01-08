<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Shop_AddressBookService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.shop.address_book' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Shop\AddressBookContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Shop/AddressBookContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.ui.shop.address_book'] = new \Sylius\Behat\Context\Ui\Shop\AddressBookContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->services['sylius.repository.address'] ?? $container->load('getSylius_Repository_AddressService')), ($container->privates['sylius.behat.page.shop.account.address_book.index'] ?? $container->load('getSylius_Behat_Page_Shop_Account_AddressBook_IndexService')), ($container->privates['sylius.behat.page.shop.account.address_book.create'] ?? $container->load('getSylius_Behat_Page_Shop_Account_AddressBook_CreateService')), ($container->privates['sylius.behat.page.shop.account.address_book.update'] ?? $container->load('getSylius_Behat_Page_Shop_Account_AddressBook_UpdateService')), ($container->privates['sylius.behat.current_page_resolver'] ?? $container->load('getSylius_Behat_CurrentPageResolverService')), ($container->privates['sylius.behat.notification_checker'] ?? $container->load('getSylius_Behat_NotificationCheckerService')));
    }
}