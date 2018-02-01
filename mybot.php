$telegram = new Telegram('511786967:AAFER0h8tLym9p-F2SsNc2-v2bt5kbWEt-E');

$result = $telegram->getData();
$text = $result['message'] ['text'];
$chat_id = $result['message'] ['chat']['id'];
$content = array('chat_id' => $chat_id, 'text' => 'Test');
$telegram->sendMessage($content);
