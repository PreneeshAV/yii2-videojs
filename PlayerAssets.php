<?php

namespace preneesh\videojs;


use yii\web\AssetBundle;

/**
 * Asset bundle for Videojs Widget
 */
class PlayerAssets extends AssetBundle
{
    public $multipleResolutions = false;

    public $sourcePath = '@videojs';

    public $js = [
        "assets/video.js",
        "assets/dash.all.debug.js",
        "assets/videojs-dash.js",
    ];

    public $css = [
        "assets/video-js.css"
    ];

    /**
     * @var array
     */
    public $publishOptions = [
        'forceCopy' => true
    ];

    public function registerAssetFiles($view)
    {
        //if multiple resolutions enabled, init it's plugin
        // if ($this->multipleResolutions) {
        //     $this->js[] = 'plugins/videojs-resolution-selector/video-quality-selector.js';
        //     $this->css[] = 'plugins/videojs-resolution-selector/button-styles.css';
        // }

        parent::registerAssetFiles($view);
    }

}
