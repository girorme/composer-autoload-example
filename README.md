Composer autoload - PSR4
--

### Blog Post
[autoload-php-utilizando-composer](https://girorme.github.io/2019/09/01/autoload-php-utilizando-composer/)

Usage:
```bash
$ composer dump-autoload
$ php index.php
```

Final index code:
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Battle;
use App\Char\{Ryu, Ken};
use App\Attributes\{Hadouken, Shoryuken};

$hadouken = new Hadouken();
$ryu = new Ryu($hadouken);

$shoryuken = new Shoryuken();
$ken = new Ken($shoryuken);

$battle = new Battle('Street Fighter!');
$battle->addChar($ryu);
$battle->addChar($ken);
$battle->start();
```
