<?php

use Styde\Str;

class StrTest extends PHPUnit\Framework\TestCase {

    public function test_studly_method_convert_strings()
    {
        $this->assertSame(
            'Name', Str::studly('name')
        );

        $this->assertSame(
            'FullName', Str::studly('full_name'),
            'Llamar a Str::studly con full_name no retorna el valor esperado FullName'
        );

        $this->assertSame(
            'BirthDate', Str::studly('birth_date'),
            'Llamar a Str::studly con birth_date no retorna el valor esperado BirthDate'
        );
    }

}