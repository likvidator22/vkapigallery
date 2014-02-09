<?php
$url = 'http://api.vkontakte.ru/method/photos.getAlbums?gid=30666517&need_covers=1'; //делаем запрос, получаем данные об альбомах
$content = file_get_contents($url);
$json = json_decode($content, true);

foreach($json['response'] as $item) {
    print '<img src=' . $item['thumb_src'] .'> <a href=./photos.php?album=' . $item['aid'] . '>' . $item['title'] . '</a><br>'; //находим в response наш AID и Title, после чего формируем ссылку в виде GET запроса, потому что именно так в моём примере мы будем понимать, в какой именно альбом мы попали. 
}
?>