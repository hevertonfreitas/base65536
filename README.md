# Base65536

[![Build Status](https://travis-ci.org/hevertonfreitas/base65536.svg?branch=master)](https://travis-ci.org/hevertonfreitas/base65536)
[![Latest Stable Version](https://poser.pugx.org/hevertonfreitas/base65536/v/stable)](https://packagist.org/packages/hevertonfreitas/base65536)
[![Total Downloads](https://poser.pugx.org/hevertonfreitas/base65536/downloads)](https://packagist.org/packages/hevertonfreitas/base65536)
[![Latest Unstable Version](https://poser.pugx.org/hevertonfreitas/base65536/v/unstable)](https://packagist.org/packages/hevertonfreitas/base65536)
[![StyleCI](https://styleci.io/repos/54432774/shield)](https://styleci.io/repos/54432774)
[![License](https://poser.pugx.org/hevertonfreitas/base65536/license)](http://opensource.org/licenses/MIT)

PHP implementation of the [base65536](https://github.com/ferno/base65536) algorithm.

## Instalation

```bash
composer require hevertonfreitas/base65536
```

## Usage

```php
require 'vendor/autoload.php';

use \Hevertonfreitas\Base65536\Base65536;

$encodedString = Base65536::encode('hello world'); // Output: 驨ꍬ啯𒁷ꍲᕤ

$decodedString = Base65536::decode($encodedString); // Output: hello world 
```

## Credits
Javascript original implementation: [base65536](https://github.com/ferno/base65536).

## License

The MIT License (MIT)
