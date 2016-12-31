<?php 
$I = new ApiTester($scenario);
$I->wantTo('archive  messages');
$I->sendGET('/messages/21/archive');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseContainsJson(['success'=>true]);