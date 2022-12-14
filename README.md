
# Protected string hash

Hashing text, emoji, and English words

---



![PHP version](https://img.shields.io/badge/php%20version->=7.4-orange)
![Project version](https://img.shields.io/badge/Project%20version-1.0-orange)


---

# Use

## Instalation

use command:
```bash
composer require devnull-ir/protected-string-hash
```

## using

namspace: `Hashing\Hash`

namspace: `Hashing\Hashing` (Facade)


You can use it in two ways
Either receive the output numerically or textually


The text output is the same as the numerical output, but with the difference that we have coded it with md5


Please note that this service only encodes Persian texts and official emojis, so for more security, use the generate method because this method is more secure.

use namespace Facade:
```php
<?php
include_once __DIR__ . "/protected-string-hash/vendor/autoload.php";

use Hashing\Hashing;

$hashValue = Hashing::generate("Input value");

echo $hashValue;

// Output: e24c2d67cf4868090a74dfdda535c9e7
```

For numeric output:


```php
<?php
include_once __DIR__ . "/protected-string-hash/vendor/autoload.php";

use Hashing\Hashing;

$hashValue = Hashing::numerical("Input value");

echo $hashValue;

// Output: 44234332352343331234234322343335250234234332343223433234332342343230

```

And finally check the hashed text:

```php
<?php
include_once __DIR__ . "/protected-string-hash/vendor/autoload.php";

use Hashing\Hashing;

$hashValue = Hashing::checkHash("Input value", "44234332352343331234234322343335250234234332343223433234332342343230", true);

var_dump($hashValue);

// Output: bool(true)
```


and text hash checking

```php
<?php
include_once __DIR__ . "/protected-string-hash/vendor/autoload.php";

use Hashing\Hashing;

$hashValue = Hashing::checkHash("Input value", "e24c2d67cf4868090a74dfdda535c9e7");

var_dump($hashValue);

// Output: bool(true)
```


use normal namespace:
```php
<?php
include_once __DIR__ . "/protected-string-hash/vendor/autoload.php";

use Hashing\Hash;
$hash = new Hash();
$hashValue = $hash->generate("Input value");

echo $hashValue;

// Output: e24c2d67cf4868090a74dfdda535c9e7
```

For numeric output:


```php
<?php
include_once __DIR__ . "/protected-string-hash/vendor/autoload.php";

use Hashing\Hash;
$hash = new Hash();

$hashValue = $hash->numerical("Input value");

echo $hashValue;

// Output: 44234332352343331234234322343335250234234332343223433234332342343230

```

And finally check the hashed text:

```php
<?php
include_once __DIR__ . "/protected-string-hash/vendor/autoload.php";

use Hashing\Hash;
$hash = new Hash();

$hashValue = $hash->checkHash("Input value", "44234332352343331234234322343335250234234332343223433234332342343230", true);

var_dump($hashValue);

// Output: bool(true)
```


and text hash checking

```php
<?php
include_once __DIR__ . "/protected-string-hash/vendor/autoload.php";

use Hashing\Hash;
$hash = new Hash();

$hashValue = $hash->checkHash("Input value", "e24c2d67cf4868090a74dfdda535c9e7");

var_dump($hashValue);

// Output: bool(true)
```


It ended so easily and beautifully


Helpers:
```php
<?php
function Hashing($method, ...$args);
function str_hash(string $string): string;
function int_hash(string $string): string;
function numerical(string $string): string;
function checkHash(string $string, string $hashed, ?bool $numerical = false): bool;
```

use Hashing Method:


```php
<?php

Hashing("generate", "Input value");

// Output: e24c2d67cf4868090a74dfdda535c9e7


```

