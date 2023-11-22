<?php

namespace Tests\Fixtures;

use Tests\TestCase;

class StringFixture extends TestCase
{
    public static function validStringEncoderData()
    {
        return [
            [
                'marin',
                '00000000000000000000000000000000000000000000000000000000000000056d6172696e000000000000000000000000000000000000000000000000000000',
            ],
            [
                'extraaaaaaaaaalooooooooooooooooooonnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnngggggggggggggggggggggggstrrrrrrrrrrrrrrrrrrrrrrrriiiiiiiiiiiinnnnnnnnng',
                '000000000000000000000000000000000000000000000000000000000000008a65787472616161616161616161616c6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e676767676767676767676767676767676767676767676773747272727272727272727272727272727272727272727272726969696969696969696969696e6e6e6e6e6e6e6e6e6700000000000000000000000000000000000000000000',
            ],
            [
                'šč|€-!',
                '000000000000000000000000000000000000000000000000000000000000000ac5a1c48d7ce282ac2d2100000000000000000000000000000000000000000000',
            ],
        ];
    }

    public static function invalidStringEncoderData()
    {
        return [[123]];
    }

    public static function validStringDecoderData()
    {
        return [
            [
                '0x00000000000000000000000000000000000000000000000000000000000000056d6172696e000000000000000000000000000000000000000000000000000000',
                'marin',
                '0x',
            ],
            [
                '0x000000000000000000000000000000000000000000000000000000000000008a65787472616161616161616161616c6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6f6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e6e676767676767676767676767676767676767676767676773747272727272727272727272727272727272727272727272726969696969696969696969696e6e6e6e6e6e6e6e6e6700000000000000000000000000000000000000000000',
                'extraaaaaaaaaalooooooooooooooooooonnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnngggggggggggggggggggggggstrrrrrrrrrrrrrrrrrrrrrrrriiiiiiiiiiiinnnnnnnnng',
                '0x',
            ],
            [
                '0x000000000000000000000000000000000000000000000000000000000000000ac5a1c48d7ce282ac2d2100000000000000000000000000000000000000000000',
                'šč|€-!',
                '0x',
            ],
        ];
    }
}