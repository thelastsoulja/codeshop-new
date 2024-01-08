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

use App\Entity\Book;
use App\Entity\Nationality;
use Sylius\Bundle\GridBundle\Builder\Field\StringField;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class BookByAmericanAuthorsGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
        return 'app_book_by_american_authors';
    }

    public function getResourceClass(): string
    {
        return Book::class;
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->setRepositoryMethod('createAmericanBooksQueryBuilder')
            ->addFilter(Filter::create('title', 'string'))
            ->addFilter(
                Filter::create('author', 'entity')
                ->setFormOptions([
                    'class' => Nationality::class,
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
                ->setPath('na.name')
                ->setSortable(true, 'na.name'),
            )
            ->setLimits([10, 5, 15])
        ;
    }
}
