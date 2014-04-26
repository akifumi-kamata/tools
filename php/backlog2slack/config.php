<?php

$configs = array();

$key = "projectname";
$configs[$key]['url']  = 'example.backlog.jp';
$configs[$key]['user'] = 'slack';
$configs[$key]['pass'] = 'password';
$configs[$key]['slack']['token']    = 'tokenString';
$configs[$key]['slack']['channel']  = urlencode('#channel-name');
$configs[$key]['slack']['username'] = 'Backlog';
//$configs[$key]['slack']['icon_url'] = urlencode('http://example.com/icon.png');

//---------------------------------------
unset($key);
