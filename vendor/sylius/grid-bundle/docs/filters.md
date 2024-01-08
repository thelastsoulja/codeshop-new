Filters
=======

*Filters* on grids are a kind of search prepared for each grid. Having
a grid of objects you can filter out only those with a specified name,
or value etc. Here you can find the supported filters. Keep in mind you
can very easily define your own ones!

String
------

Simplest filter type. It can filter by one or multiple fields.

<details open><summary>Yaml</summary>

```yaml
sylius_grid:
    grids:
        app_user:
            filters:
                username:
                    type: string
                email:
                    type: string
                firstName:
                    type: string
                lastName:
                    type: string
```

</details>

<details open><summary>PHP</summary>

```php
<?php

use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\Filter\StringFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid): void {
    $grid->addGrid(GridBuilder::create('app_user', '%app.model.user.class%')
        ->addFilter(Filter::create('username', 'string'))
        ->addFilter(Filter::create('email', 'string'))
        ->addFilter(Filter::create('firstName', 'string'))
        ->addFilter(Filter::create('lastName', 'string'))
    
        // can be simplified using StringFilter
        ->addFilter(StringFilter::create('username'))
        ->addFilter(StringFilter::create('email'))
        ->addFilter(StringFilter::create('firstName'))
        ->addFilter(StringFilter::create('lastName'))
    )
};
```

OR

```php
<?php
# src/Grid/UserGrid.php

declare(strict_types=1);

namespace App\Grid;

use App\Entity\User;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\Filter\StringFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class UserGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
           return 'app_user';
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(Filter::create('username', 'string'))
            ->addFilter(Filter::create('email', 'string'))
            ->addFilter(Filter::create('firstName', 'string'))
            ->addFilter(Filter::create('lastName', 'string'))
            
            // can be simplified using StringFilter
            ->addFilter(StringFilter::create('username'))
            ->addFilter(StringFilter::create('email'))
            ->addFilter(StringFilter::create('firstName'))
            ->addFilter(StringFilter::create('lastName'))
        ;    
    }
    
    public function getResourceClass(): string
    {
        return User::class;
    }
}
```

</details>

The filter allows the user to select following search options:

-   contains
-   not contains
-   equal
-   not equal
-   starts with
-   ends with
-   empty
-   not empty
-   in
-   not in

If you don't want display all theses matching possibilities, you can
choose just one of them. Then only the input field will be displayed.
You can achieve it like that:

<details open><summary>Yaml</summary>

```yaml
sylius_grid:
    grids:
        app_user:
            filters:
                username:
                    type: string
                    form_options:
                        type: contains
```

</details>

<details open><summary>PHP</summary>

```php
<?php

use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\Filter\StringFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid): void {
    $grid->addGrid(GridBuilder::create('app_user', '%app.model.user.class%')
        ->addFilter(
            Filter::create('username', 'string')
                ->setFormOptions([
                    'type' => 'contains',
                ])
        )
        
        // can be simplified using StringFilter
        ->addFilter(
            StringFilter::create('username', null, 'contains')
        )
    )
};
```

OR

```php
<?php
# src/Grid/UserGrid.php

declare(strict_types=1);

namespace App\Grid;

use App\Entity\User;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\Filter\StringFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class UserGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
           return 'app_user';
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(
                Filter::create('username', 'string')
                    ->setFormOptions([
                        'type' => 'contains',
                    ])
            )
            
            // can be simplified using StringFilter
            ->addFilter(
                StringFilter::create('username', null, 'contains')
            )
        ;    
    }
    
    public function getResourceClass(): string
    {
        return User::class;
    }
}
```

</details>

By configuring a filter like above you will have only an input field for
filtering users objects that `contain` a given string in their username.

Boolean
-------

<details open><summary>Yaml</summary>

This filter checks if a value is true or false.

```yaml
sylius_grid:
    grids:
        app_channel:
            filters:
                enabled:
                    type: boolean
```

</details>

<details open><summary>PHP</summary>

```php
<?php

use Sylius\Bundle\GridBundle\Builder\Filter\BooleanFilter;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid): void {
    $grid->addGrid(GridBuilder::create('app_user', '%app.model.user.class%')
        ->addFilter(
            Filter::create('enabled', 'boolean')
        )
        
        // can be simplified using BooleanFilter
        ->addFilter(
            BooleanFilter::create('enabled')
        )
    )
};
```

OR

```php
<?php
# src/Grid/UserGrid.php

declare(strict_types=1);

namespace App\Grid;

use App\Entity\User;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\Filter\BooleanFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class UserGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
           return 'app_user';
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(
                Filter::create('enabled', 'boolean')
            )
            
            // can be simplified using BooleanFilter
            ->addFilter(
                BooleanFilter::create('enabled')
            )
        ;    
    }
    
    public function getResourceClass(): string
    {
        return User::class;
    }
}
```

</details>

Date
----

This filter checks if a chosen datetime field is between given dates.

<details open><summary>Yaml</summary>

```yaml
sylius_grid:
    grids:
        app_order:
            filters:
                createdAt:
                    type: date
                completedAt:
                    type: date
```

</details>

<details open><summary>PHP</summary>

```php
<?php

use Sylius\Bundle\GridBundle\Builder\Filter\DateFilter;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid): void {
    $grid->addGrid(GridBuilder::create('app_user', '%app.model.user.class%')
        ->addFilter(Filter::create('createdAt', 'date'))
        ->addFilter(Filter::create('completedAt', 'date'))
        
        // can be simplified using DateFilter
        ->addFilter(DateFilter::create('createdAt'))
        ->addFilter(DateFilter::create('completedAt'))
    )
};
```

OR

```php
<?php
# src/Grid/UserGrid.php

declare(strict_types=1);

namespace App\Grid;

use App\Entity\User;
use Sylius\Bundle\GridBundle\Builder\Filter\DateFilter;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class UserGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
           return 'app_user';
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(Filter::create('createdAt', 'date'))
            ->addFilter(Filter::create('completedAt', 'date'))
            
            // can be simplified using DateFilter
            ->addFilter(DateFilter::create('createdAt'))
            ->addFilter(DateFilter::create('completedAt'))
        ;    
    }
    
    public function getResourceClass(): string
    {
        return User::class;
    }
}
```

</details>

Entity
------

This type filters by a chosen entity.

<details open><summary>Yaml</summary>

```yaml
sylius_grid:
    grids:
        app_order:
            filters:
                channel:
                    type: entity
                    form_options:
                        class: "%app.model.channel.class%"
                customer:
                    type: entity
                    form_options:
                        class: "%app.model.customer.class%"
```

</details>

<details open><summary>PHP</summary>

```php
<?php

use Sylius\Bundle\GridBundle\Builder\Filter\EntityFilter;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid): void {
    $grid->addGrid(GridBuilder::create('app_user', '%app.model.user.class%')
        ->addFilter(
            Filter::create('channel', 'entity')
                ->setFormOptions(['class' => '%app.model.channel.class%'])
        )
        ->addFilter(
            Filter::create('customer', 'entity')
                ->setFormOptions(['class' => '%app.model.customer.class%'])
        )
        
        // can be simplified using EntityFilter
        ->addFilter(
            EntityFilter::create('channel', '%app.model.channel.class%')
        )
        ->addFilter(
            EntityFilter::create('customer', '%app.model.customer.class%')
        )
    )
};
```

OR

```php
<?php
# src/Grid/UserGrid.php

declare(strict_types=1);

namespace App\Grid;

use App\Entity\User;
use Sylius\Bundle\GridBundle\Builder\Filter\EntityFilter;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class UserGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
           return 'app_user';
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(
                Filter::create('channel', 'entity')
                    ->setFormOptions(['class' => '%app.model.channel.class%'])
            )
            ->addFilter(
                Filter::create('customer', 'entity')
                    ->setFormOptions(['class' => '%app.model.customer.class%'])
            )
            
            // can be simplified using EntityFilter
            ->addFilter(
                EntityFilter::create('channel', '%app.model.channel.class%')
            )
            ->addFilter(
                EntityFilter::create('customer', '%app.model.customer.class%')
            )
        ;    
    }
    
    public function getResourceClass(): string
    {
        return User::class;
    }
}
```

</details>

Money
-----

This filter checks if an amount is in range and in a specified currency

<details open><summary>Yaml</summary>

```yaml
sylius_grid:
    grids:
        app_order:
            filters:
                total:
                    type: money
                    form_options:
                        scale: 3
                    options:
                        currency_field: currencyCode
                        scale: 3
```

</details>

<details open><summary>PHP</summary>

```php
<?php

use Sylius\Bundle\GridBundle\Builder\Filter\MoneyFilter;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid): void {
    $grid->addGrid(GridBuilder::create('app_user', '%app.model.user.class%')
        ->addFilter(
            Filter::create('total', 'money')
                ->setFormOptions(['scale' => 3])
                ->setOptions([
                    'currency_field' => 'currencyCode',
                    'scale' => 3,
                ])
        )
        
        // can be simplified using MoneyFilter
        ->addFilter(
            MoneyFilter::create('total', 'currencyCode', 3)
        )
    )
};
```

OR

```php
<?php
# src/Grid/UserGrid.php

declare(strict_types=1);

namespace App\Grid;

use App\Entity\User;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\Filter\MoneyFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class UserGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
           return 'app_user';
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(
                Filter::create('total', 'money')
                    ->setFormOptions(['scale' => 3])
                    ->setOptions([
                        'currency_field' => 'currencyCode',
                        'scale' => 3,
                    ])
            )
            
            // can be simplified using MoneyFilter
            ->addFilter(
                MoneyFilter::create('total', 'currencyCode', 3)
            )
        ;    
    }
    
    public function getResourceClass(): string
    {
        return User::class;
    }
}
```

</details>

### *Warning*

Providing different `scale` between *form_options* and *options*
may cause unwanted, and plausibly volatile results.

Exists
------

This filter checks if the specified field contains any value

<details open><summary>Yaml</summary>

```yaml
sylius_grid:
    grids:
        app_order:
            filters:
                date:
                    type: exists
                    options:
                        field: completedAt
```

</details>

<details open><summary>PHP</summary>

```php
<?php

use Sylius\Bundle\GridBundle\Builder\Filter\ExistsFilter;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid): void {
    $grid->addGrid(GridBuilder::create('app_user', '%app.model.user.class%')
        ->addFilter(
            Filter::create('date', 'exists')
                ->setOptions(['field' => 'completedAt'])
        )
        
        // can be simplified using ExistsFilter
        ->addFilter(
            ExistsFilter::create('date', 'completedAt')
        )
    )
};
```

OR

```php
<?php
# src/Grid/UserGrid.php

declare(strict_types=1);

namespace App\Grid;

use App\Entity\User;
use Sylius\Bundle\GridBundle\Builder\Filter\ExistsFilter;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class UserGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
           return 'app_user';
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(
                Filter::create('date', 'exists')
                    ->setOptions(['field' => 'completedAt'])
            )
            
            // can be simplified using ExistsFilter
            ->addFilter(
                ExistsFilter::create('date', 'completedAt')
            )
        ;    
    }
    
    public function getResourceClass(): string
    {
        return User::class;
    }
}
```

</details>

Select
------

This type filters by a value chosen from the defined list

<details open><summary>Yaml</summary>

```yaml
sylius_grid:
    grids:
        app_order:
            filters:
                state:
                    type: select
                    form_options:
                        choices:
                            sylius.ui.ready: Ready
                            sylius.ui.shipped: Shipped
```

</details>

<details open><summary>PHP</summary>

```php
<?php

use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\Filter\SelectFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilder;
use Sylius\Bundle\GridBundle\Config\GridConfig;

return static function (GridConfig $grid): void {
    $grid->addGrid(GridBuilder::create('app_user', '%app.model.user.class%')
        ->addFilter(
            Filter::create('state', 'select')
                ->setFormOptions([
                    'choices' => [
                        'sylius.ui.ready' => 'Ready',
                        'sylius.ui.shipped' => 'Shipped',
                    ],
                ])
        )
        
        // can be simplified using SelectFilter
        ->addFilter(
            SelectFilter::create('state', [
                'sylius.ui.ready' => 'Ready',
                'sylius.ui.shipped' => 'Shipped',
            ])
        )
    )
};
```

OR

```php
<?php
# src/Grid/UserGrid.php

declare(strict_types=1);

namespace App\Grid;

use App\Entity\User;
use Sylius\Bundle\GridBundle\Builder\Filter\Filter;
use Sylius\Bundle\GridBundle\Builder\Filter\SelectFilter;
use Sylius\Bundle\GridBundle\Builder\GridBuilderInterface;
use Sylius\Bundle\GridBundle\Grid\AbstractGrid;
use Sylius\Bundle\GridBundle\Grid\ResourceAwareGridInterface;

final class UserGrid extends AbstractGrid implements ResourceAwareGridInterface
{
    public static function getName(): string
    {
           return 'app_user';
    }

    public function buildGrid(GridBuilderInterface $gridBuilder): void
    {
        $gridBuilder
            ->addFilter(
                Filter::create('state', 'select')
                    ->setFormOptions([
                        'choices' => [
                            'sylius.ui.ready' => 'Ready',
                            'sylius.ui.shipped' => 'Shipped',
                        ],
                    ])
            )
            
            // can be simplified using SelectFilter
            ->addFilter(
                SelectFilter::create('state', [
                    'sylius.ui.ready' => 'Ready',
                    'sylius.ui.shipped' => 'Shipped',
                ])
            )
        ;    
    }
    
    public function getResourceClass(): string
    {
        return User::class;
    }
}
```

</details>

Custom Filters
--------------

### *Tip*

If you need to create a custom filter,
read the docs [here](custom_filter.md).
