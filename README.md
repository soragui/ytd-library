# Ytd library

> Fork from [alltube](https://github.com/Rudloff/alltube-library) which is nolonger maintain.

This library lets you extract a video URL from a webpage
by providing a wrapper
for [youtube-dl](https://ytdl-org.github.io/youtube-dl/index.html).

You can install it with:

```bash
composer require soragui/ytd-library
```

You can then use it in your PHP code:

```php
use Ytd\Library\Downloader;

require_once __DIR__.'/vendor/autoload.php';

$downloader = new Downloader('/usr/local/bin/youtube-dl');
$video = $downloader->getVideo('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
$video->getUrl();
```
