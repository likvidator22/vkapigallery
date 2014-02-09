<?php
$url = 'http://api.vkontakte.ru/method/photos.getAlbums?gid=30666517&need_covers=1'; //делаем запрос, получаем данные об альбомах
$content = file_get_contents($url);
$json = json_decode($content, true);

foreach($json['response'] as $item) {
    print '<img src=' . $item['thumb_src'] .'> <a href=./photos.php?album=' . $item['aid'] . '>' . $item['title'] . '</a><br>';
}
?>