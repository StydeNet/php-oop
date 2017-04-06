<?php

use Styde\Model;

class ModelArrayAccessTest extends PHPUnit\Framework\TestCase {

    protected function newModel(array $attributes = [])
    {
        return new class($attributes) extends Model { };
    }

    public function test_offset_get()
    {
        $user = $this->newModel([
            'name' => 'Duilio Palacios',
            'email' => 'duilio@styde.net',
            'website' => 'https://styde.net',
        ]);

        $this->assertSame('Duilio Palacios', $user['name']); // $user->name

        $this->assertSame('duilio@styde.net', $user['email']); // $user->name

        $this->assertSame('https://styde.net', $user['website']); // $user->name
    }

    public function test_offset_exists()
    {
        $user = $this->newModel([
            'name' => 'Duilio Palacios',
        ]);

        $this->assertTrue(isset($user['name']));

        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));

        $this->assertTrue(empty($user['email']));
    }

    /** @test **/
    function it_set_and_get_values_with_array_access()
    {
        $user = $this->newModel();

        $user['name'] = 'Duilio Palacios';

        $this->assertSame('Duilio Palacios', $user['name']);
    }

    /** @test **/
    function it_can_set_and_unset_properties_with_array_access()
    {
        $user = $this->newModel();

        $user['name'] = 'Duilio Palacios';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);        

        $this->assertFalse(isset($user['name']));
    }

}








