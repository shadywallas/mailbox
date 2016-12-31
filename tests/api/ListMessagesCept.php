<?php 
$I = new ApiTester($scenario);
$I->wantTo('list all messages in the api with pagination');
$I->sendGET('/messages');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseContainsJson([]);

