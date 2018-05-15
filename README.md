Yii2 Multisite
===============
[![Latest Stable Version](https://poser.pugx.org/nullref/yii2-multisite/v/stable)](https://packagist.org/packages/nullref/yii2-multisite) [![Total Downloads](https://poser.pugx.org/nullref/yii2-multisite/downloads)](https://packagist.org/packages/nullref/yii2-multisite) [![Latest Unstable Version](https://poser.pugx.org/nullref/yii2-multisite/v/unstable)](https://packagist.org/packages/nullref/yii2-multisite) [![License](https://poser.pugx.org/nullref/yii2-multisite/license)](https://packagist.org/packages/nullref/yii2-multisite)

Module for multi site (WIP)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist nullref/yii2-multisite "*"
```

or add

```
"nullref/yii2-multisite": "*"
```

to the require section of your `composer.json` file.

Then You have run console command for install this module:

```
php yii module/install nullref/yii2-multisite
```

Pay attention that if you don't use our [application template](https://github.com/NullRefExcep/yii2-boilerplate) 
it needs to change config files structure to have ability run commands that show above.

Please check this [documentation section](https://github.com/NullRefExcep/yii2-core#config-structure)

You need to add module to bootstrap list of application:

```php
//...
'bootstrap' => [
    'multisite',
    //...
    ],
//...
```

Using with admin module
----------------------------

You can use this module with modules:
- [Yii2 Admin](https://github.com/NullRefExcep/yii2-admin).
- [Yii2 Full Admin](https://github.com/NullRefExcep/yii2-full-admin).

Models overriding
-----------------

```php

    'multisite' => [
        'class' => 'nullref\multisite\Module',
        'classMap' => [
            'Site' => 'app\models\Site',
            'SiteQuery' => 'app\models\SiteQuery',
        ],
    ],
```
