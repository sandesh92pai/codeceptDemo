<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('web/index.php/auth/login');
        $I->see('Login');
    }


}
