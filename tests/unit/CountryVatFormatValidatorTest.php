<?php

// TODO: set namespace
namespace unit;

class CountryVatFormatValidatorTest extends TestCase
{
    /**
     * TODO: set type
     * @var
     */
    private $validator;

    /**
     * TODO: setup validator for test
     */
    protected function setUp(): void
    {
        $this->validator = new CountryVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber',
                'isValid',
            ],
        ];
    }
}
