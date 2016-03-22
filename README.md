# Base65536

PHP implementation of the [base65536](https://github.com/ferno/base65536) algorithm.

## Instalation

```bash
composer require hevertonfreitas/base65536
```

## Usage

```php
$encodedString = \Hevertonfreitas\Base65536::encode('hello world'); // Output: 驨ꍬ啯𒁷ꍲᕤ

$decodedString = \Hevertonfreitas\Base65536::decode($encodedString); // Output: hello world 
```

## Credits
Javascript original implementation: [base65536](https://github.com/ferno/base65536).

## License

The MIT License (MIT)
