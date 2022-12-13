<?php

/*
 * This file is part of the Reading Time plugin.
 *
 * (c) Sergey Romanenko <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Awilum\CraftReadingTime;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigFilter;
use Twig_Extension;
use function Awilum\CraftReadingTime\readingTime;

class ReadingTimeTwigExtension extends AbstractExtension
{
	/**
	 * Get Name
	 *
	 * @return string
	 */
	public function getName()
	{
		return 'ReadingTimeTwigExtension';
	}

	/**
	 * Get TwigFilter
	 *
	 * @return array
	 */
	public function getFilters()
	{
		return [
			new TwigFilter('readingTime', fn(string $content, array $options = []) => readingTime($content, $options)),
		];
	}

	/**
	 * Get Functions
	 *
	 * @return array
	 */
	public function getFunctions()
	{
		return [
			new TwigFunction('readingTime', fn(string $content, array $options = []) => readingTime($content, $options)),
		];
	}
}