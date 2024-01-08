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

namespace Sylius\Calendar\Tests\Behat\Context\Hook;

use Behat\Behat\Context\Context;

final class CalendarContext implements Context
{
    public function __construct(private string $projectDirectory)
    {
    }

    /** @AfterScenario */
    public function deleteTemporaryDate(): void
    {
        if (file_exists($this->projectDirectory . '/var/temporaryDate.txt')) {
            unlink($this->projectDirectory . '/var/temporaryDate.txt');
        }
    }
}
