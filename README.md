# Math
Test library is just for a job interview.

# Features
  - Arrays
    - [Fibonacci](#fibonacci)
# Set up 

Add the library to your composer.json file in your project:

```json
{
	"repositories": [
		{
		  "type": "vcs",
		  "url": "git@github.com:djnikola/math.git"
	}],
	"require": {
		"djnikola/math": "1.0.0"
	}
}

```
Use [composer](https://getcomposer.org/) to install the library:
```
$ php composer.phar install
```

Composer will install Math inside your vendor folder. Then you can add the following to your .php files to use the library with Autoloading.

```php
require_once __DIR__ . '/vendor/autoload.php';
```

# Minimum Requirements
 - PHP 7.0.0

# Usage
## Arrays
### Fibonacci
```php
require_once __DIR__ . '/vendor/autoload.php';

use Math\Arrays\FibonacciRecursion;

$f = new FibonacciRecursion();
echo $f->getNumber(8);
```

# Standards

Math library conforms to the following standards:

 - PSR-4 - Autoloader (http://www.php-fig.org/psr/psr-4/)
 - PSR-12 - Extended coding style guide (http://www.php-fig.org/psr/psr-12/)
# Authors
	Nikola Dordevic
# Licence
None
