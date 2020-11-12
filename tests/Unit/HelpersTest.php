<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */



    public function test_page_title_should_return_the_correct_title()
    {
       //  dd( page_title(''));
       // $this->assertTrue(true);
         $this->assertEquals('Laracarte-siwar',page_title('')); //si page_title('') est executé c egale a Laracarte-siwar
    }


    public function test_page_title_should_return_the_correct_title_if_title_is_provided()
    {
        //  dd( page_title(''));
        // $this->assertTrue(true);
        $this->assertEquals('About | Laracarte-siwar',page_title('About')); //si page_title('') est executé c egale a Laracarte-siwar
    }

    public function test_set_active_route_should_return_the_correct_class_based_on_a_given_route() {

        $this->get(route('home_path'));
        $this->assertEquals('active',set_active_route('home_path'));
        $this->assertEquals('',set_active_route('about_path'));

    }
}
