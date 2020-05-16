Video js implementation in Yii2
==
This extension utilises video js to enable video playing in yii2 application.

Feaures :
-Playing youtube videos in yii2 application using videojs.
-Playing Mp4 videos in yii2 application using videojs.
-Dash streaming in yii2 application using videojs. Dynamic Adaptive Streaming over HTTP (DASH) is an adaptive bitrate streaming technique that enables high quality streaming. Source to be modified with manifest.mpd file as shown in example.
-HLS streaming in yii2 applicationusing videojs. HLS stands for HTTP Live Streaming and it uses a  .M3U8 playlist file (e.g. manifest file) that serves as an index for the video chunks.

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


HLS streaming in Yii2 application using below code:

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
            'src' => 'https://bitdash-a.akamaihd.net/content/MI201109210084_1/m3u8s/f08e80da-bf1d-4e3d-8899-f0f6155f6efa.m3u8', 'type' => 'application/x-mpegURL', 'selected' => 'true'],
              ],
    ],
    'multipleResolutions' => true,
]);
?>
```

License
-----
Please refer folowing links to comply the license of js files used in this extension.

https://github.com/videojs/videojs-youtube
https://github.com/videojs/video.js
https://github.com/videojs/videojs-contrib-dash
https://github.com/Dash-Industry-Forum/dash.js/wiki

yii2-videojs license

The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
