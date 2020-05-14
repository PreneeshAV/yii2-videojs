Video js implementation in Yii2
==
Video js implementation in Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist preneesh/yii2-videojs "dev-master"
```

or add

```
"preneesh/yii2-videojs": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

Play mp4 videos

```php

<?php
echo \preneesh\videojs\Player::widget([
    'options' => [
        'class' => 'video-js vjs-default-skin vjs-big-play-centered',
        'poster' => 'http://localhost/projects/ffmpeg/gold.jpg',
        'controls' => true,
        'preload' => 'auto',
        'width' => '970',
        'height' => '400',
    ],
    'tags' => [
        'source' => [
            ['src' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4', 'type' => 'video/mp4', 'data-res' => '360'],
              ],
    ],
    'multipleResolutions' => true,
]);
?>
```

Dash Streaming by providing manifest file.

```php

<?php
echo \preneesh\videojs\Player::widget([
    'options' => [
        'class' => 'video-js vjs-default-skin vjs-big-play-centered',
        'poster' => 'http://localhost/projects/ffmpeg/gold.jpg',
        'controls' => true,
        'preload' => 'auto',
        'width' => '970',
        'height' => '400',
    ],
    'tags' => [
        'source' => [
          ['src' => 'http://localhost/projects/ffmpeg/web/ver-12/video/gemini/dash3/manifest.mpd', 'type' => 'application/dash+xml', 'data-res' => '720'],

              ],
    ],
    'multipleResolutions' => true,
]);

?>
```

Play Youtbe video in Yii2 application using below code:

```php

<?= \preneesh\videojs\Player::widget([
    'options' => [
        'class' => 'video-js vjs-default-skin vjs-big-play-centered',
        'poster' => 'http://localhost/projects/ffmpeg/gold.jpg',
        'controls' => true,
        'preload' => 'auto',
        'width' => '970',
        'height' => '400',
    ],
    'tags' => [
        'source' => [
            ['src' => 'https://www.youtube.com/watch?v=R2MEiwBJTYM&t=4s', 'type' => 'video/youtube',],
              ],
    ],
    'multipleResolutions' => true,
]);
?>
```
