<?php

namespace Spotwilliams\Miscellaneous;

class A
{
    public static function getInstanceByUsingSelf(): A
    {
        // Always return objects of type A
        return new self();
    }

    public static function getInstanceByUsingStatic(): A
    {
        // it will return an instance of the real class that is using this method
        return new static();
    }
}