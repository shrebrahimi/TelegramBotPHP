<?php

include("Telegram.php");
data_default_timezone_set("asia/tehran");

$bot_id = "511786967:AAFER0h8tLym9p-F2SsNc2-v2bt5kbWEt-E";

$telegram = new Telegram($bot_id);

$result = $telegram->getData();

$text                       = $telegram->Text();
$chat_id                    = $telegram->ChatID();
$username                   = $telegram->Username();
$name                       = $telegram->FirstName();
$family                     = $telegram->LastName();
$callback_data              = $telegram->Callback_Data();
$callback_query             = $telegram->Callback_Query();
$callback_chat_id           = $telegram->Callback_ChatID();
$callback_id                = $telegram->Callback_ID();
$message_id                 = $telegram->MessageID();
$user_id                    = $telegram->UserID();


if(!is_null($text) && !is_null($chat_id)) {

$content = array('chat_id' => $chat_id, 'text' => $user_id);
$telegram->sendReplyMesaage($content);


}
