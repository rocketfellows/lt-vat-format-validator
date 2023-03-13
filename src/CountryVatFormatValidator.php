<?php

// TODO: set namespace

/**
 * TODO: rename validator
 */
class CountryVatFormatValidator extends CountryVatFormatValidator
{
    private const VAT_NUMBER_PATTERN = ''; // TODO: implement pattern

    protected function isValidFormat(string $vatNumber): bool
    {
        return (bool) preg_match(self::VAT_NUMBER_PATTERN, $vatNumber);
    }
}
