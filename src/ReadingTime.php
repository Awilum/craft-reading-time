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

use Craft;
use craft\base\Plugin;
use Awilum\CraftReadingTime\ReadingTimeTwigExtension;

class ReadingTime extends Plugin
{
    public function init()
    {
        parent::init();
        Craft::$app->view->registerTwigExtension(new ReadingTimeTwigExtension());
    }
}