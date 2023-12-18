<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SigninCest
{
    public function _before(AcceptanceTester $I)
    {
        echo (" Inside the before ");
    }

    //  @group smoke
    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('web/index.php/auth/login');
        $I->waitForElement("//input[@name='username']",60);
        $I->see('Login');
    }

    // @group test02
    // tests
    public function testAgain(AcceptanceTester $I)
    {
        $I->amOnPage('web/index.php/auth/login');
        $I->waitForElement("//input[@name='username']",60);
        $I->fillField("//input[@name='username']",'Admin');
        $I->fillField("//input[@name='password']",'admin123');
        $I->click("//button[@type='submit']");
        $I->wait(10);
        $I->see('Dashboard');
    }
}
