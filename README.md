# Lithuania vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Lithuania vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/lt-vat-format-validator
```

## Usage example

Valid Lithuania vat number:

```php
$validator = new LTVatFormatValidator();
$validator->isValid('LT123456789');
$validator->isValid('LT123456789012');
$validator->isValid('123456789');
$validator->isValid('123456789012');
```

Returns:

```shell
true
true
true
true
```

Invalid Lithuania vat number:

```php
$validator = new LTVatFormatValidator();
$validator->isValid('LT1234567890');
$validator->isValid('LT12345678');
$validator->isValid('LT1234567890120');
$validator->isValid('LT12345678901');
$validator->isValid('1234567890');
$validator->isValid('12345678');
$validator->isValid('1234567890120');
$validator->isValid('12345678901');
$validator->isValid('DE123456789');
$validator->isValid('DE123456789012');
```

```shell
false
false
false
false
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
