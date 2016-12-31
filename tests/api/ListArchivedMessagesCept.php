<?php 
$I = new ApiTester($scenario);
$I->wantTo('list all Archived messages in the api with pagination');
$I->sendGET('/messages/archived');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseIsJson();
$I->SeeResponseContainsJson([]);
