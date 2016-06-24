latte-contrast-yiq
===============

Plugin for Nette. Default usage is for Latte templates. From RGB color return contrast color black/white

Installation
------------

 1. Add the bundle to your dependencies:

   Install with composer:

		composer require venca-x/latte-contrast-yiq:~0.2
		
		
	// composer.json

        {
           // ...
           "require": {
               // ...
			   "venca-x/latte-contrast-yiq": "@dev",
           }
        }

 2. Use Composer to download and install the bundle:

        composer update

Configuration
-------------

BasePresenter.php

```php

protected function beforeRender()
{
    parent::beforeRender();

    $this->template->addFilter('contrastYIQ', function ($text) {
        $contrastYIQ = new \ContrastYIQ();
        return $contrastYIQ->getContrastYIQ($text);
    });
}

```

Usage
-------------

```php
{$o->color|contrastYIQ}

```