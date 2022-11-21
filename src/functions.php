<?php

declare(strict_types=1);

namespace ReadingTime;

/**
 * Get reading time
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
        'format'              => '{minutes_count} {minutes_label}, {seconds_count} {seconds_label}',
        'format.alt'          => '{seconds_count} {seconds_label}',
        'format.alt.enable'   => false
    ];

    $options      = array_merge($defaults, $options);
    $words        = str_word_count(strip_tags($content));
    $minutesCount = floor($words / 200);
    $secondsCount = floor($words % 200 / (200 / 60));
    $minutesLabel = ($minutesCount <= 1) ? $options['minute'] : $options['minutes'];
    $secondsLabel = ($secondsCount <= 1) ? $options['second'] : $options['seconds'];

    $replace      = [
        'minutes_count' => $minutesCount,
        'minutes_label' => $minutesLabel,
        'seconds_count' => $secondsCount,
        'seconds_label' => $secondsLabel,
    ];

    if ($minutesCount < 1 and $options['format.alt.enable'] === true) {
        $result = $options['format.alt'];
    } else {
        $result = $options['format'];
    }

    foreach ($replace as $key => $value) {
        $result = str_replace('{' . $key . '}', $value, $result);
    }

    return $result;
}


