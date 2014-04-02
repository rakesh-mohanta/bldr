<?php

/**
 * This file is part of Bldr.io
 *
 * (c) Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE
 */

namespace Bldr\Extension\Database\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Bldr\DependencyInjection\AbstractExtension;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 */
class DatabaseExtension extends AbstractExtension
{
	/**
	 * Loads a specific configuration.
	 *
	 * @param array            $config    An array of configuration values
	 * @param ContainerBuilder $container A ContainerBuilder instance
	 *
	 * @throws \InvalidArgumentException When provided tag is not defined in this extension
	 *
	 * @api
	 */
	public function load( array $config, ContainerBuilder $container )
	{
	}

} 