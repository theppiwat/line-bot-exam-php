<?php



require "vendor/autoload.php";

$access_token = 'dJ6tp05lkRY3l22t7+NiptVrAn81JGeYQhpzcOe68p3RG5HKxF1VSGRcyShq3soXOOt4AzzbesTeeXyfLz4wbBdSq6ur4W9ojxN6R/mushIf+mCjC/P6D9QIz2LQ9I7SAMSc1i4Qql/KDO5tf+aChgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '08b0197e71a64a955bb405725cd38fc4';

$pushID = 'U867baa9182c133568fa3fe734f712741';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ยินดีด้วยคุณมีการนักเรียนเพิ่มกรุณาเช็คตารางสอนของคุณ http://localhost/tutor/index.php');
$response = $bot->pushMessage($pushID,."ใช้ IDนี้เพื่อรับการแจ้งเตือน"., $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







