<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ProductReviewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.product_review' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\Product\ProductReviewType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ReviewBundle/Form/Type/ReviewType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Type/Product/ProductReviewType.php';

        return $container->services['sylius.form.type.product_review'] = new \Sylius\Bundle\CoreBundle\Form\Type\Product\ProductReviewType('Sylius\\Component\\Core\\Model\\ProductReview', $container->parameters['sylius.form.type.product_review.validation_groups']);
    }
}
