latte-contrastYIQ
===============

Plugin for Nette. Default usage is for Latte templates. From RGB color return contrast color black/white

Installation
------------

 1. Add the bundle to your dependencies:

        // composer.json

        {
           // ...
           "require": {
               // ...
			   "venca-x/latte-contrastYIQ": "@dev",
           }
        }

 2. Use Composer to download and install the bundle:

        composer update

Configuration
-------------

BasePresenter.php

```php

protected function createTemplate( $class = NULL )
{
    $template = parent::createTemplate( $class );
    $template->registerHelper( 'contrastYIQ', callback( new \ContrastYIQ(), 'getContrastYIQ' ) );
    return $template;
}

```

Usage
-------------

```php
{$o->color|createTemplate}

```