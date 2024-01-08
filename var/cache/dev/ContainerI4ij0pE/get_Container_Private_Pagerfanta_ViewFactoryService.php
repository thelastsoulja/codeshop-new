<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Pagerfanta_ViewFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.container.private.pagerfanta.view_factory' shared service.
     *
     * @return \Pagerfanta\View\ViewFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/ViewFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/ViewFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/ViewInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/View.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/TemplateView.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/DefaultView.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/Foundation6View.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/SemanticUiView.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/TwitterBootstrapView.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/TwitterBootstrap3View.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/TwitterBootstrap4View.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/View/TwitterBootstrap5View.php';
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Twig/View/TwigView.php';

        $container->services['.container.private.pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory();

        $instance->set('default', new \Pagerfanta\View\DefaultView());
        $instance->set('foundation6', new \Pagerfanta\View\Foundation6View());
        $instance->set('semantic_ui', new \Pagerfanta\View\SemanticUiView());
        $instance->set('twitter_bootstrap', new \Pagerfanta\View\TwitterBootstrapView());
        $instance->set('twitter_bootstrap3', new \Pagerfanta\View\TwitterBootstrap3View());
        $instance->set('twitter_bootstrap4', new \Pagerfanta\View\TwitterBootstrap4View());
        $instance->set('twitter_bootstrap5', new \Pagerfanta\View\TwitterBootstrap5View());
        $instance->set('twig', new \Pagerfanta\Twig\View\TwigView(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), '@Pagerfanta/default.html.twig'));

        return $instance;
    }
}
