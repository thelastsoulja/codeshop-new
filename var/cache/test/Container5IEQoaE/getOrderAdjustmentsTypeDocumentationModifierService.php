<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderAdjustmentsTypeDocumentationModifierService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ApiBundle\OpenApi\Documentation\OrderAdjustmentsTypeDocumentationModifier' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\OpenApi\Documentation\OrderAdjustmentsTypeDocumentationModifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/OpenApi/Documentation/DocumentationModifierInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/OpenApi/Documentation/OrderAdjustmentsTypeDocumentationModifier.php';

        return $container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\OrderAdjustmentsTypeDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\OrderAdjustmentsTypeDocumentationModifier('/api/v2', 'Sylius\\Component\\Core\\Model\\Adjustment');
    }
}
