<?php


declare(strict_types=1);

namespace Test;

use App\User;
use PHPUnit\Framework\TestCase;
use TypeError;

class UserTest extends TestCase
{
    public function test_if_can_assign_proper_values(): void
    {
        $user = new User(123, 'Arnas');

        $user->id = 333;
        $user->name = 'Petras';

        $this->addToAssertionCount(1);
    }

    public function test_throws_exception_when_assigning_bad_values(): void
    {
        $user = new User(123, 'Arnas');

        try {
            $user->id = '333';
            $user->name = 1;
        } catch (TypeError $error) {
            $this->assertInstanceOf(TypeError::class, $error);
        }
    }
}
