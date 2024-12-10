<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testCreate(AcceptanceTester $I)
    {
        $I->amOnPage('/products/create.php');
        $I->fillField('#name', 'notepad');
        $I->fillField('#price', '20');
        $I->fillField('#article', '3');
        $I->click('#btn3');
        $I->wait('3');
    }
   public function testDelete(AcceptanceTester $I)
    {
        $I->amOnPage('/products/index.php');
        $I->click('#delete');
        $I->wait('3');
    }


}
