<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Grid;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\Nationality;
use Sylius\Bundle\GridBundle\Builder\Action\CreateAction;
use Sylius\Bundle\GridBundle\Builder\Action\DeleteAction;
use Sylius\Bundle\GridBundle\Builder\Action\ShowAction;
use Sylius\Bundle\GridBundle\Builder\Action\UpdateAction;
use Sylius\Bundle\GridBundle\Builder\ActionGroup\ItemActionGroup;
use Sylius\Bundle\GridBundle\Builder\ActionGroup\MainActionGroup;
use Sylius\Bundle\GridBundle\Builder\Field\StringField;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class BookGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
        return 'app_book';
    }

    public function getResourceClass(): string
    {
        return Book::class;
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(Filter::create('title', 'string'))
            ->addFilter(
                Filter::create('author', 'entity')
                ->setFormOptions([
                    'class' => Author::class,
                    'multiple' => true,
                ]),
            )
            ->addFilter(
                Filter::create('nationality', 'entity')
                ->setOptions([
                    'fields' => ['author.nationality'],
                ])
                ->setFormOptions([
                    'class' => Nationality::class,
                ]),
            )
            ->addFilter(
                Filter::create('currencyCode', 'string')
                ->setOptions([
                    'fields' => ['price.currencyCode'],
                ]),
            )
            ->addFilter(
                Filter::create('state', 'select')
                ->setFormOptions([
                    'multiple' => true,
                    'choices' => [
                        'initial' => 'initial',
                        'published' => 'published',
                        'unpublished' => 'unpublished',
                    ],
                ]),
            )
            ->orderBy('title', 'asc')
            ->addField(
                StringField::create('title')
                    ->setLabel('Title')
                    ->setSortable(true),
            )
            ->addField(
                StringField::create('author')
                    ->setLabel('Author')
                    ->setPath('author.name')
                    ->setSortable(true, 'author.name'),
            )
            ->addField(
                StringField::create('nationality')
                    ->setLabel('Nationality')
                    ->setPath('author.nationality.name')
                    ->setSortable(true, 'author.nationality.name'),
            )
            ->addActionGroup(
                ItemActionGroup::create(
                    ShowAction::create([
                        'link' => [
                            'route' => 'app_admin_book_show',
                        ],
                    ]),
                ),
            )
            ->addActionGroup(
                MainActionGroup::create(
                    CreateAction::create(),
                ),
            )
            ->addActionGroup(
                ItemActionGroup::create(
                    ShowAction::create(),
                    UpdateAction::create(),
                    DeleteAction::create(),
                ),
            )
            ->setLimits([10, 5, 15])
        ;
    }
}
