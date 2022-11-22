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

namespace CraftPlugins\ReadingTime;

/**
 * Get reading time
 * 
 * @param string $content Content
 * @param array $options Options
 * 
 * @return string
 */
function readingTime(string $content, array $options = []): string
{
    $defaults = [
        'minute'              => 'minute',
        'minutes'             => 'minutes',
        'second'              => 'second',
        'seconds'             => 'seconds',
        'format'              => '[minutes_count] [minutes_label], [seconds_count] [seconds_label]'
    ];

    $options      = array_merge($defaults, $options);
    $words        = str_word_count(strip_tags($content));
    $minutesCount = (int) floor($words / 200);
    $secondsCount = (int) floor($words % 200 / (200 / 60));
    $minutesLabel = ($minutesCount <= 1) ? $options['minute'] : $options['minutes'];
    $secondsLabel = ($secondsCount <= 1) ? $options['second'] : $options['seconds'];

    $replace = [
        '[minutes_count]' => $minutesCount,
        '[minutes_label]' => $minutesLabel,
        '[seconds_count]' => $secondsCount,
        '[seconds_label]' => $secondsLabel,
    ];

    return str_replace(array_keys($replace), array_values($replace), $options['format']);
}


