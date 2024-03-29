<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ECSPrefix202306\Symfony\Component\VarDumper\Caster;

use ECSPrefix202306\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * Represents any arbitrary value.
 *
 * @author Alexandre Daubois <alex.daubois@gmail.com>
 */
class ScalarStub extends Stub
{
    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
}
