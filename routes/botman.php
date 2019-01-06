<?php

use App\Conversations\StartConversation;

$botman = resolve('botman');

$botman->hears('/random', 'App\Http\Controllers\AllBreedsController@random');




// use App\Http\Controllers\BotManController;

// $botman = resolve('botman');

// $botman->hears('Hi', function ($bot) {
//    $bot->reply('Hello!');
// });
// $botman->hears('Start conversation', BotManController::class.'@startConversation');
