# Country vat format validator template description

## Implementation steps

1. Create repository use template for name: <ISO-3166-standard-alpha2-code>-vat-format-validator
2. Update composer.json **name** attribute: rocketfellows/<ISO-3166-standard-alpha2-code>-vat-format-validator
3. Update composer.json with autoload and autoload-dev sections by pattern:
```php
   "autoload": {
        "psr-4": {
            "rocketfellows\\<ISO-3166-standard-alpha2-code>VatFormatValidator\\": "src/"
        }
   },
   "autoload-dev": {
        "psr-4": {
            "rocketfellows\\<ISO-3166-standard-alpha2-code>VatFormatValidator\\tests\\": "tests/"
        }
   }
```
3. Run docker-deploy.sh
4. Implement unit test in test/unit directory
5. Implement direct validator

# Templated readme

# <Country> vat format validator

![Code Coverage Badge](./badge.svg)

This component provides <Country> vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/<ISO-3166-standard-alpha2-code>-vat-format-validator
```

## Usage example

Valid <Country> vat number:

```php
$validator = new <Country>VatFormatValidator();
$validator->isValid('');
$validator->isValid('');
```

Returns:

```shell
true
true
```

Invalid <Country> vat number:

```php
$validator = new <Country>VatFormatValidator();
$validator->isValid('');
$validator->isValid('');
```

```shell
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.

