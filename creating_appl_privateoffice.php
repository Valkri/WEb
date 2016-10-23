<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify possibility of creating application in private office');
$I->haveInDatabase('lovata_buddies_users', array(
     'id'=> '1',
	 'email'=> 'valkri@mail.ru',
	 'password'=> '12345'),
$I->haveInDatabase('lovata_contest_works', array (
     'id' => '1',
	 'user_id'=> '1',
	 'category_id'=> '1',
	 'name'=>'Name1',
	 'product'=>'Product1',
	 'created_at'=>'20окт.2016г.18.40',	 
	 'updated_at'=>'20окт.2016г.18.40' 
	 'on_site'=>'1');	 
$I->haveInDatabase('lovata_buddies_category', array ('id' => '1', 'name'=>'Профессиональная вертикаль',);
$I->amOnPage('/');
$I->click('.header-sign__reg._action');
$I->see('.b-modal__window)';
$I->fillField('#email', 'valkri@mail.ru');
$I->fillField('#pass', '12345');
$I->submitForm('form__btn js-submitBtn');
$I->waitForElement('.header-sign__login', 5);
$I->see('.header-sign__login', 'aaa');
$I->click('.header-sign__login');
$I->see('.header-login__block-inside');
$I->click('.header-login__addjob-btn _action');
$I->see('.b-modal__window');
$I->selectOption('.b-popup-addwork__select.addwork-category__select_cont','Профессиональная вертикаль');
$I->selectOption('.addwork-contest__select', 'Film');
$I->selectOption('.b-popup-addwork__radio-label', 'F1');
$I->fillField('#name_work', 'Name3');
$I->fillField('#adv_prod', 'Product3');
$I->selectOption('typecompany__radio-label','Рекламное агенствоэ');
$I->fillField('#agency','Agency3');
$I->fillField('#customer','Customer3');
$I->fillField('#idea','Idea3');
$I->submitForm('.b-popup-addwork__submit.js-submitBtn');
$I->click('.header-sign__login', 'aaa');
$I->see('.header-login__block-inside');
$I->click('.login-nav__link');
$I->see('.container-page');
$I->see('.work__title', 'Name3');
$I->see('.work__product', 'Product3'));




$I->fillField('#editw-name', 'Name2');
$I->fillField('#editw-advprod', 'Product2');
$I->submitForm('b-popup-addwork__submit.js-submitBtn');
$I->see('.container-page');
$I->see('.work__edit-info._action', '[name=Name2]');
$I->see('.container-page');
$I->see('.work__title', 'Name2');
$I->see('.work__product', 'Product2'));




$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->click('.header-sign__reg._action');
$I->see('.b-modal__window)';
$I->fillField('#email', 'valkri@mail.ru');
$I->fillField('#pass', '12345');
$I->submitForm('.form__btn.js-submitBtn');
$I->click('.header-sign__login');
$I->see('.header-login__block-inside');
$I->click('.header-login__addjob-btn._action');
$I->see('.b-modal__window');
$I->selectOption('.b-popup-addwork__select.addwork-category__select_cont','Профессиональная вертикаль');
$I->selectOption('.addwork-contest__select', 'Film');
$I->selectOption('.b-popup-addwork__radio-label', 'F1');
$I->fillField('#name_work');
$I->fillField('#adv_prod');
$I->fillField('#agency');
$I->fillField('#customer');
$I->fillField('#idea');
$I->fillField('#video');
$I->fillField('#www');
$I->submitForm('.b-popup-addwork__submit.js-submitBtn'));
