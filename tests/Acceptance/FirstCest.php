<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
  /*  // tests
    public function testCreate(AcceptanceTester $I)
    {
        $I->amOnPage('/products/create.php');
        $I->fillField('#name', 'notepad');
        $I->fillField('#price', '20');
        $I->fillField('#article', '0');
        $I->click('#btn3');
        $I->wait('3');
    }
    public function testUpdate(AcceptanceTester $I)
    {
        $I->amOnPage('/products/index.php');
        $I->click('#rr');
        $I->fillField('#name2', 'pencil');
        $I->click('#btn11');
        $I->wait('3');
        $I->click('#inf');
    }*/
   /*public function testDelete(AcceptanceTester $I)
    {
        $I->amOnPage('/products/index.php');
        $I->click('#delete');
        $I->wait('3');
    }*/
    public function testCreate1(AcceptanceTester $I)
    {
        $I->amOnPage('/admission/create.php');
        $I->fillField('#quantity', '10');
        $I->selectOption('#product', 'pencil');
        $I->fillField('#date', '10.12.2024');
        $I->click('#btn2');
        $I->wait('3');
    }

}
