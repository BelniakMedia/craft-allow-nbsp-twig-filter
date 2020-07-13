<?php
/**
 * Allow NBSP Twig Filter plugin for Craft CMS 3.x
 *
 * asdf
 *
 * @link      https://belniakmedia.com
 * @copyright Copyright (c) 2020 Belniak Media, Inc.
 */

namespace belniakmedia\craftAllowNbsp;


use belniakmedia\craftAllowNbsp\twigextensions\AllowNbspTwigExtension;
use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class AllowNbspTwigFilter
 *
 * @author    Belniak Media, Inc.
 * @package   AllowNbspTwigFilter
 * @since     1.0.0
 *
 */
class AllowNbspTwigFilter extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var AllowNbspTwigFilter
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

		Craft::$app->view->registerTwigExtension(new AllowNbspTwigExtension());

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'craft-allow-nbsp-twig-filter',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
