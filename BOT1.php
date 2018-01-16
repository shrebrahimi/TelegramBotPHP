include("Telegram.php");
date_default_timezone_set("asia/tehran");
// Set the bot TOKEN
$bot_id = "511786967:AAFER0h8tLym9p-F2SsNc2-v2bt5kbWEt-E";
// Instances the class
$telegram = new Telegram($bot_id);

$result = $telegram->getData();

$text = $telegram->Text();

$username = $telegram->Username(); // نام کاربری کاربر
$name = $telegram->FirstName();
$family = $telegram->LastName();
$message_id = $telegram->MessageID(); // هر پیغام در تلگرام یک آیدی یکتا دارد
$user_id = $telegram->UserID(); // چت آیدی یکتای کاربر



 if ($text == '/start'){
  
    $sendMessage = new SendMessage();
    $sendMessage->chat_id = id;
    $sendMessage->text = 'Hello world!';
}

if(!is_null($text) && !is_null($chat_id)){
$content = array('chat_id' => $chat_id, 'text' => $user_id);
$telegram->sendReplyMessage($content);
}
