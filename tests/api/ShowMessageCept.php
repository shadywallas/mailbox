<?php 
$I = new ApiTester($scenario);
$I->wantTo('show  messages');
$I->sendGET('/messages/21');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseContainsJson(['uid'=>21]);