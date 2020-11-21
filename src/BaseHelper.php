<?php
namespace tutor2u\base;

use Craft;

abstract class BaseHelper
{
    // Public Methods
    // =========================================================================

    public static function registerModule()
    {
        $moduleId = 'tutor2u-base';

        if (!Craft::$app->hasModule($moduleId)) {
            Craft::$app->setModule($moduleId, new Base($moduleId));

            Craft::$app->getModule($moduleId);
        }
    }
}