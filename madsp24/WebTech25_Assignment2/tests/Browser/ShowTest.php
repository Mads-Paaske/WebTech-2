<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowTest extends DuskTestCase
{
    use DatabaseTruncation;

    protected function setUp(): void{
        parent::setUp();
        $this->artisan('db:seed');
    }


    public function testAccessShow(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/');
            $browser->click('@to-show');
            $browser->assertPathIs('/1');
        });
    }

    /**
     * If does not work, use TAs to re-write
     */
    public function testDifferentResources(): void
    {
        $this->browse(function (Browser $browser) {
            $model_name = env("ASSIGNMENT_RESOURCE");
            $model = app("App\Models\\".$model_name);
            $resource1 = $model::find(1);
            $info1 = array_keys($resource1->attributesToArray())[3]; 
            $resource2 = $model::find(2);
            $info2 = array_keys($resource2->attributesToArray())[3];
            $browser->visit('/1');
            $browser->assertSee($info1);
            $browser->assertDontSee($info2);

            $browser->assertPathIs('/2');
            $browser->assertDontSee($info1);
            $browser->assertSee($info2);
        });
    }

    /**
     * TAs should write this test
     */
    public function testResourceInfo(): void
    {
        $this->browse(function (Browser $browser) {
            $model_name = env("ASSIGNMENT_RESOURCE");
            $model = app("App\Models\\".$model_name);
            $resource = $model::find(1);
            $browser->visit('/1');

            /* $browser->assertSee(...) */ //Rewrite accordingly
        });
    }
}
