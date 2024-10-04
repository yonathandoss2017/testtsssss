https://5e50264bd6766.streamlock.net/mexiquense2/videomexiquense2/playlist.m3u8



<?php
// Ejecutar el comando ffmpeg desde PHP
$iptv_url = "http://wz4.dnip.com.br/bemtv/bemtv.sdp/playlist.m3u8";
$youtube_stream_url = "rtmp://ls18.live.rmbl.ws/slot-113/5kgz-s40i-tm2u";

$command = "ffmpeg -i $iptv_url -c:v libx264 -f flv $youtube_stream_url";
shell_exec($command);
?>
