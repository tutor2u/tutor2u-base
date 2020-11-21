<?php
namespace tutor2u\base;

use Craft;
use craft\events\RegisterTemplateRootsEvent;
use craft\helpers\ArrayHelper;
use craft\web\View;

use yii\base\Event;
use yii\base\Module as YiiModule;

class Base extends YiiModule
{
    // Public Methods
    // =========================================================================

    public function init()
    {
        Event::on(View::class, View::EVENT_REGISTER_SITE_TEMPLATE_ROOTS, function(RegisterTemplateRootsEvent $e) {
            $e->roots['_base'] = __DIR__ . '/templates';
        });

        parent::init();
    }
}