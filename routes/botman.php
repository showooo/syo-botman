<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
    $gamp = GAMP::setClientId( '123456' );
    $gamp->setDocumentPath( '/botZ' );
    $gamp->sendPageview();
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
