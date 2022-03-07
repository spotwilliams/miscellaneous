<?php

namespace Spotwilliams\Miscellaneous\Tests;

use PHPUnit\Framework\TestCase;
use Spotwilliams\Miscellaneous\A;
use Spotwilliams\Miscellaneous\B;
use Spotwilliams\Miscellaneous\C;

class DifferenceBetweenSelfAndStaticInstantiationTest extends TestCase
{
    /** @covers \Spotwilliams\Miscellaneous\A */
    public function test_use_constructor_of_A_gives_a_instance()
    {
        $a = new A();

        $this->assertEquals(A::class, get_class($a));
    }

    /** @covers \Spotwilliams\Miscellaneous\B */
    public function test_use_constructor_of_B_gives_b_instance()
    {
        $a = new B();

        $this->assertEquals(B::class, get_class($a));
    }

    /** @covers \Spotwilliams\Miscellaneous\A::getInstanceByUsingSelf */
    public function test_when_instantiate_A_using_self_gives_A()
    {
        $a = A::getInstanceByUsingSelf();

        $this->assertEquals(A::class, get_class($a));

    }

    /** @covers \Spotwilliams\Miscellaneous\B::getInstanceByUsingSelf */
    public function test_when_instantiate_B_using_self_gives_A()
    {
        $a = B::getInstanceByUsingSelf();

        $this->assertEquals(A::class, get_class($a));

    }

    /** @covers \Spotwilliams\Miscellaneous\B::getInstanceByUsingStatic */
    public function test_when_instantiate_B_using_static_gives_B()
    {
        $a = B::getInstanceByUsingStatic();

        $this->assertEquals(B::class, get_class($a));

    }

    /** @covers \Spotwilliams\Miscellaneous\C::getInstanceByUsingSelf */
    public function test_when_instantiate_C_using_self_gives_A()
    {
        $a = C::getInstanceByUsingSelf();

        $this->assertEquals(A::class, get_class($a));

    }

    /** @covers \Spotwilliams\Miscellaneous\C::getInstanceByUsingStatic */
    public function test_when_instantiate_C_using_static_gives_C()
    {
        $a = C::getInstanceByUsingStatic();

        $this->assertEquals(C::class, get_class($a));

    }
}
