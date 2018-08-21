<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
    $docpath = $_SERVER['HTTP_HOST']."+".$_SERVER['HTTP_USER_AGENT'];
    $gamp = GAMP::setClientId( 'teamA' );
    $gamp->setDocumentPath( $docpath );
    $gamp->sendPageview();
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
