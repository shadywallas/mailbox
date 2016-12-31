<?php 
$I = new ApiTester($scenario);
$I->wantTo('read  messages');
$I->amHttpAuthenticated('service_user', '123456');
$I->sendGET('/messages/21/read');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseContainsJson(['success'=>true]);

$I->sendGET('/messages/21');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseContainsJson(['uid'=>21]);
$I->dontseeResponseContainsJson(['read_at'=>null]);