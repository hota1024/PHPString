# PHPString
PHP String wrapper class and methods.

# Installation
## Use composer
Type this command.

`composer require hota1024/php-string`

## Can't you use composer?
OK.

1. Download this repository.
2. Extract the PHPString-master.zip.
3. You can use `PHPString-master/src/hota1024/String.php`

# How to use it?
## composer
```php
require_once "path/to/vendor/autoload.php";

$str = new hota1024\Str('Hello world!');
echo $str; # Hello world!
```
## Don't use composer
```php
include "path/to/String.php";

$str = new hota1024\Str('Hello world!');
echo $str; # Hello world!
```

# Tutorial
## Step1「Create String object」
```php
$string = new hota1024\Str('string value'); # Create string object.
```

Troublesome coding hota1024\Str?

You can use this code.

`use \hota1024\Str;`

```php
use \hota1024\Str;

$string = new hota1024\Str('string value');
```

## Step2「Output string value」
Usually use `echo`.

```php
$helloworld = new Str('Hello world!');
echo $helloworld; # Hello world!
```

If you wish objective programming code?

You can use this method.

```php
$helloworld = new Str('Hello world!');
$helloworld->output(); # Hello world!
```

## Step3「String to Array」
```php
$helloworld = new Str('Hello world!');
var_dump($helloworld->asArray()); # Array ( [0] => H [1] => e [2] => l [3] => l [4] => o [5] => [6] => w [7] => o [8] => r [9] => l [10] => d [11] => ! )
```

## Step4「Reverse string」
You can make reverse string.
```php
$apple = new Str('Apple');
$apple->reverse();
echo $apple; # elppA
```

You wish reversed value?
```php
$apple = new Str('Apple');
$rev = $apple->reversed();
echo $rev; # elppA
```

### Step4.1「Write compact code」
```php
$apple = new Str('Apple');
$apple->reverse();
echo $apple; # elppA
```
↓
```php
$apple = new Str('Apple');
$apple->reverse()->output(); # elppA
```

