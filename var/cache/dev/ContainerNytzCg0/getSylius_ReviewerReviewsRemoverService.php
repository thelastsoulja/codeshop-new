<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ReviewerReviewsRemoverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.reviewer_reviews_remover' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Remover\ReviewerReviewsRemover
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Remover/ReviewerReviewsRemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Remover/ReviewerReviewsRemover.php';

        return $container->services['sylius.reviewer_reviews_remover'] = new \Sylius\Bundle\CoreBundle\Remover\ReviewerReviewsRemover(($container->services['sylius.repository.product_review'] ?? $container->load('getSylius_Repository_ProductReviewService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.product_review.average_rating_updater'] ?? $container->load('getSylius_ProductReview_AverageRatingUpdaterService')));
    }
}
