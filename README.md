Latte-contrast-yiq
===============
[![Build Status](https://travis-ci.org/venca-x/latte-contrast-yiq.svg)](https://travis-ci.org/venca-x/latte-contrast-yiq) 
[![Latest Stable Version](https://poser.pugx.org/venca-x/latte-contrast-yiq/v/stable.svg)](https://packagist.org/packages/venca-x/latte-contrast-yiq) 
[![Total Downloads](https://poser.pugx.org/venca-x/latte-contrast-yiq/downloads.svg)](https://packagist.org/packages/venca-x/latte-contrast-yiq) 
[![Latest Unstable Version](https://poser.pugx.org/venca-x/latte-contrast-yiq/v/unstable.svg)](https://packagist.org/packages/venca-x/latte-contrast-yiq) 
[![License](https://poser.pugx.org/venca-x/latte-contrast-yiq/license.svg)](https://packagist.org/packages/venca-x/latte-contrast-yiq)

Plugin for Nette. Default usage is for Latte templates. From RGB color return contrast color black/white. Typical set contrast text color for dynamic color background.

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
