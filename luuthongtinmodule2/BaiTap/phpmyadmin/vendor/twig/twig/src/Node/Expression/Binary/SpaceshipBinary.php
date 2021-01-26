<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please View the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression\Binary;

use Twig\Compiler;

class SpaceshipBinary extends AbstractBinary
{
    public function operator(Compiler $compiler)
    {
        return $compiler->raw('<=>');
    }
}