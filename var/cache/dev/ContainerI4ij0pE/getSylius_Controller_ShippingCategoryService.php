<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_ShippingCategoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.shipping_category' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Controller\ResourceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ResourceController.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Metadata/MetadataInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Metadata/Metadata.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/NewResourceFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/NewResourceFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/SingleResourceProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/SingleResourceProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/AuthorizationCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/DisabledAuthorizationChecker.php';

        $container->services['sylius.controller.shipping_category'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController(($container->privates['sylius.resource_registry'] ?? $container->getSylius_ResourceRegistryService())->get('sylius.shipping_category'), ($container->privates['sylius.resource_controller.request_configuration_factory'] ?? $container->load('getSylius_ResourceController_RequestConfigurationFactoryService')), ($container->privates['sylius.resource_controller.view_handler'] ?? $container->load('getSylius_ResourceController_ViewHandlerService')), ($container->services['sylius.repository.shipping_category'] ?? $container->load('getSylius_Repository_ShippingCategoryService')), ($container->services['sylius.factory.shipping_category'] ?? ($container->services['sylius.factory.shipping_category'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Shipping\\Model\\ShippingCategory'))), ($container->privates['sylius.resource_controller.new_resource_factory'] ?? ($container->privates['sylius.resource_controller.new_resource_factory'] = new \Sylius\Bundle\ResourceBundle\Controller\NewResourceFactory())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['sylius.resource_controller.single_resource_provider'] ?? ($container->privates['sylius.resource_controller.single_resource_provider'] = new \Sylius\Bundle\ResourceBundle\Controller\SingleResourceProvider())), ($container->privates['sylius.resource_controller.resources_collection_provider'] ?? $container->load('getSylius_ResourceController_ResourcesCollectionProviderService')), ($container->privates['sylius.resource_controller.form_factory'] ?? $container->load('getSylius_ResourceController_FormFactoryService')), ($container->privates['Sylius\\Bundle\\AdminBundle\\Controller\\RedirectHandler'] ?? $container->load('getRedirectHandlerService')), ($container->privates['sylius.resource_controller.flash_helper'] ?? $container->load('getSylius_ResourceController_FlashHelperService')), ($container->privates['sylius.resource_controller.authorization_checker.disabled'] ?? ($container->privates['sylius.resource_controller.authorization_checker.disabled'] = new \Sylius\Bundle\ResourceBundle\Controller\DisabledAuthorizationChecker())), ($container->privates['sylius.resource_controller.event_dispatcher'] ?? $container->load('getSylius_ResourceController_EventDispatcherService')), ($container->privates['sylius.resource_controller.state_machine'] ?? $container->load('getSylius_ResourceController_StateMachineService')), ($container->privates['sylius.custom_resource_controller.resource_update_handler'] ?? $container->load('getSylius_CustomResourceController_ResourceUpdateHandlerService')), ($container->privates['sylius.custom_resource_controller.resource_delete_handler'] ?? $container->load('getSylius_CustomResourceController_ResourceDeleteHandlerService')));

        $instance->setContainer($container);

        return $instance;
    }
}
