<?php

declare(strict_types=1);

namespace CraftPlugins\ReadingTime;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigFilter;
use Twig_Extension;
use function CraftPlugins\ReadingTime\readingTime;

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