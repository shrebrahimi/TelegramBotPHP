<?php

include("Telegram.php");

$bot_id = "511786967:AAFER0h8tLym9p-F2SsNc2-v2bt5kbWEt-E";

$telegram = new Telegram($bot_id);

$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Test');
$telegram->sendMessage($content);
