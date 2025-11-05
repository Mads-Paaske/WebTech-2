<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdateTest extends DuskTestCase
{

    use DatabaseTruncation;

    protected function setUp(): void{
        parent::setUp();
        $this->artisan('db:seed');
    }


    public function testAccessUpdate(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/');
            $browser->click('@to-edit');
            $browser->assertPathIs('/1/edit');
        });
    }

    public function testUpdateFormExist(): void {
        $this->browse(function (Browser $browser) {
            $browser->visit('/1/edit');
            $form = $browser->element('form');
            PHPUnit::assertEquals(
                "post", strtolower($form->getAttribute("method")),
                "Form HTTP method is incorrect. Using: [{$form->getAttribute("method")}]"
            );

            $method = $browser->inputValue('_method');

            PHPUnit::assertTrue(
                "PUT" == $method || "PATCH" == $method,
                "Form HTTP method is incorrect."
            );
            PHPUnit::assertStringEndsWith(
                "/1", $form->getAttribute("action"),
                "Form HTTP action is incorrect. Using: [{$form->getAttribute("action")}]"
            );
        });
    }

    /**
     * TAs should rewrite this
     */
    public function testUpdateFormFilled(): void {
        $this->browse(function (Browser $browser) {
            $browser->visit('/1/edit');
            /* $browser->assertInputValue($field, $value); */ //Rewrite with proper input values
        });
    }

    /**
     * TAs should rewrite this
     */
    public function testUpdateInformation(): void {
        $this->browse(function (Browser $browser) {
            $browser->visit('/1/edit');
           
            /* $browser->type('name', 'test name');*/ //Rewrite with proper input values

            $browser->press('input[type="submit"]');
            $browser->pause(500);

            $browser->assertPathIs('/1');
            /* $browser->assertSee(...);*/ //Rewrite with proper updated value changed
        });
    }

    /**
     * TAs should rewrite this
     */
    public function testUpdateMessage(): void {
        $this->browse(function (Browser $browser) {
            $browser->visit('/1/edit');
           
            /* $browser->type('name', 'test name');*/ //Rewrite with proper input values

            $browser->press('input[type="submit"]');
            $browser->pause(500);

            $browser->assertPathIs('/1');
            $browser->assertSee('Entity updated successfully');
            $browser->refresh();
            $browser->pause(500);
            $browser->assertDontSee('Entity updated successfully');
        });
    }

}
