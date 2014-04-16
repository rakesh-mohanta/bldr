<?php

/**
 * This file is part of Bldr.io
 *
 * (c) Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE
 */

namespace Bldr\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 */
interface BlockInterface
{
    /**
     * @return CompilerPassInterface[]
     */
    public function getCompilerPasses();
}
