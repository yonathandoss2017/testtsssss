<?php
// Ejecutar el comando ffmpeg desde PHP
$iptv_url = "http://wz4.dnip.com.br/bemtv/bemtv.sdp/playlist.m3u8";
$youtube_stream_url = "rtmp://ls24.live.rmbl.ws/slot-155/aexe-nix7-nba1";

$command = "ffmpeg -i $iptv_url -c:v libx264 -f flv $youtube_stream_url";
shell_exec($command);
?>
