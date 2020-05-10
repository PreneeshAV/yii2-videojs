<?php

namespace preneesh\videojs;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\InvalidConfigException;

/**
 * Class Player
 * @package preneesh
 */

class Player extends \yii\base\Widget
{
    /**
     * @var array
     */
    public $options = [];

    /**
     * @var null
     */
    public $jsOptions = null;

    /**
     * @var array
     */
    public $tags = [];

    /**
     * Let you init multi resolutions plugin
     * Usage:
     *'source' => [
     *    ['src' => 'http://video-js.zencoder.com/oceans-clip.mp4', 'type' => 'video/mp4', 'data-res' => '360'],
     *    ['src' => 'http://video-js.zencoder.com/oceans-clip.mp4', 'type' => 'video/mp4', 'data-res' => '720'],
     * ],
     * @var bool
     */
    public $multipleResolutions = false;

    /**
     * Initializes the widget
     * @throw InvalidConfigException
     */
    public function init()
    {
        parent::init();

        Yii::setAlias('@videojs', dirname(__FILE__));

        if (!isset($this->options['id'])) {
            $this->options['id'] = 'videojs-' . $this->getId();
        }

        $this->registerAssets();
    }

    public function run()
    {
        $data = '';
        $data .= Html::beginTag('video', $this->options);

        if (!empty($this->tags) && is_array($this->tags)) {

            foreach ($this->tags as $tagName => $tags) {
                if (is_array($this->tags[$tagName])) {
                    foreach ($tags as $tagOptions) {
                        $tagContent = '';
                        if (isset($tagOptions['content'])) {
                            $tagContent = $tagOptions['content'];
                            unset($tagOptions['content']);
                        }

                        $data .= Html::tag($tagName, $tagContent, $tagOptions);
                    }

                } else {
                    throw new InvalidConfigException("Invalid config for 'tags' property.");
                }
            }

        }

        $data .= Html::endTag('video');

        return $data;
    }

    /**
     * Registers the needed assets
     */
    private function registerAssets()
    {
        $view = $this->getView();

        $asset = PlayerAssets::register($view);
        // $asset->multipleResolutions = $this->multipleResolutions;
        //
        // if (!is_null($this->jsOptions)) {
        //     $js = 'videojs("#' . $this->options['id'] . '").ready(' . $this->jsOptions . ');';
        //     $view->registerJs($js);
        // }
    }
}
