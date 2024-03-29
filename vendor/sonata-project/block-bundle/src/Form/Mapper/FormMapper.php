<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\BlockBundle\Form\Mapper;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormTypeInterface;

/**
 * @author Christian Gripp <mail@core23.de>
 */
interface FormMapper
{
    /**
     * @param string[] $keys
     */
    public function reorder(array $keys): static;

    /**
     * @param class-string<FormTypeInterface>|null $type
     * @param array<string, mixed>                 $options
     */
    public function add(string $name, ?string $type = null, array $options = []): static;

    public function remove(string $key): static;

    public function has(string $key): bool;

    public function get(string $key): FormBuilderInterface;
}
