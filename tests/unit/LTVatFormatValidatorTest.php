<?php

namespace rocketfellows\LTVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class LTVatFormatValidatorTest extends TestCase
{
    /**
     * @var LTVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new LTVatFormatValidator();
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
                'vatNumber' => 'LT123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LT000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LT111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LT999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LT123456789012',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LT000000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LT111111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LT999999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LT1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'LT12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'LT1234567890120',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'LT12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890120',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'LT12345678A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'LT12345678901A',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678901A',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE123456789012',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
