<?php
$url = 'http://api.vkontakte.ru/method/photos.get?gid=30666517&aid=' . $_GET["album"]; //делаем запрос к API
$content = file_get_contents($url);
$json = json_decode($content, true);

foreach($json['response'] as $item) {
    print '<img src=' . $item['src_big'] . '>'; //находим все наши src_big
}
?>