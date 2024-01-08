<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminAuthenticationTokenDocumentationModifierService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ApiBundle\OpenApi\Documentation\AdminAuthenticationTokenDocumentationModifier' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\OpenApi\Documentation\AdminAuthenticationTokenDocumentationModifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/OpenApi/Documentation/DocumentationModifierInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/OpenApi/Documentation/AdminAuthenticationTokenDocumentationModifier.php';

        return $container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\AdminAuthenticationTokenDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\AdminAuthenticationTokenDocumentationModifier('/api/v2');
    }
}
