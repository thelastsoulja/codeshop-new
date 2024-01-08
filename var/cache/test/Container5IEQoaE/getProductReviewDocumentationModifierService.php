<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductReviewDocumentationModifierService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ApiBundle\OpenApi\Documentation\ProductReviewDocumentationModifier' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\OpenApi\Documentation\ProductReviewDocumentationModifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/OpenApi/Documentation/DocumentationModifierInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/OpenApi/Documentation/ProductReviewDocumentationModifier.php';

        return $container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductReviewDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\ProductReviewDocumentationModifier('/api/v2');
    }
}