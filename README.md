Video js implementation in Yii2
==
Video js implementation in Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist preneesh/yii2-videojs "*"
```

or add

```
"preneesh/yii2-videojs": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

<?= \preneesh\videojs\Player::widget([
    'options' => [
        'class' => 'video-js vjs-default-skin vjs-big-play-centered',
        'poster' => 'http://video-js.zencoder.com/oceans-clip.png',
        'controls' => true,
        'preload' => 'auto',
        'width' => '970',
        'height' => '400',
        'data-setup' => '{ "plugins" : { "resolutionSelector" : { "default_res" : "720" } } }',
    ],
    'tags' => [
        'source' => [
            // ['src' => 'http://video-js.zencoder.com/oceans-clip.mp4', 'type' => 'video/mp4', 'data-res' => '360'],
            ['src' => 'http://localhost/projects/ffmpeg/web/ver-12/video/gemini/dash3/manifest.mpd', 'type' => 'application/dash+xml', 'data-res' => '720'],

        ],
    ],
    'multipleResolutions' => true,
]); ?>
