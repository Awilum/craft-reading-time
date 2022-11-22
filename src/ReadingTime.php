<?php

declare(strict_types=1);

namespace CraftPlugins\ReadingTime;

use Craft;
use craft\base\Plugin;
use CraftPlugins\ReadingTime\ReadingTimeTwigExtension;

class ReadingTime extends Plugin
{
    public function init()
    {
        parent::init();
        Craft::$app->view->registerTwigExtension(new ReadingTimeTwigExtension());
    }
}