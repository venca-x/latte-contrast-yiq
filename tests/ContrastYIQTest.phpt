<?php

use Tester\Assert;

# Nacteme knihovny Testeru
require __DIR__ . '/../vendor/autoload.php';          # pri instalaci Composerem

# Nacteme testovanou tridu. V praxi se o to zrejme postara Composer anebo vas autoloader
//require __DIR__ . '/../src/ContrastYIQ.php';


# Konfigurace prostredi velmi zprehledni vypisy chyb.
# Nemusite pouzit, pokud preferujete vychozi vypis PHP.
Tester\Environment::setup();

$o = new ContrastYIQ;

Assert::same( 'white', $o->getContrastYIQ( '#000000' ) );
Assert::same( 'black', $o->getContrastYIQ( '#FFFFFF' ) );
Assert::same( 'black', $o->getContrastYIQ( '#ffffff' ) );
Assert::same( 'white', $o->getContrastYIQ( '#7f7f7f' ) );
Assert::same( 'black', $o->getContrastYIQ( '#808080' ) );
