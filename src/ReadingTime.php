<?php

declare(strict_types=1);

namespace ReadingTime;

use ReadingTime\ReadingTimeTwigExtension;

class ReadingTime extends \craft\base\Plugin
{
    public function init()
    {
        parent::init();
        Craft::$app->view->registerTwigExtension(new ReadingTimeTwigExtension());
    }
}