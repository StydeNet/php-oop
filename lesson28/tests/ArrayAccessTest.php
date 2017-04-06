<?php

use Styde\Model;

class ArrayAccessTest extends PHPUnit\Framework\TestCase {

    public function test_a_model_has_array_access()
    {
        $user = new UserTest([
            'name' => 'Duilio Palacios',
            'email' => 'duilio@styde.net',
            'website' => 'https://styde.net',
        ]);

        $this->assertSame('Duilio Palacios', $user['name']); // $user->name

        $this->assertSame('duilio@styde.net', $user['email']); // $user->name

        $this->assertSame('https://styde.net', $user['website']); // $user->name
    }

}

class UserTest extends Model implements ArrayAccess {

    // isset - empty
    public function offsetExists($offset)
    {
        
    }

    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }

    public function offsetSet($offset, $value)
    {
        
    }

    // unset
    public function offsetUnset($offset)
    {
        
    }

}








