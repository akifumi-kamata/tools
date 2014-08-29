<?php
/**
 *
 * UIDを確認
 * 実機でアクセスした後にPCで閲覧すると直前の端末情報が表示されます。
 * コピペして使ってください。
 * docomo端末の場合には、guid=on のリンクを踏んでください
 * 
 */

// 一時データ保存
$file = "/tmp/uid.txt";

$uid_d = $_SERVER['HTTP_X_DCMGUID'];
$uid_s = $_SERVER['HTTP_X_JPHONE_UID'];
$uid_a = $_SERVER['HTTP_X_UP_SUBNO'];

$user_agent = $_SERVER['HTTP_USER_AGENT'];


print <<<END
<a href="./uid.php?guid=on">guid=on</a><br />
END;

print "guid:".$uid_d;
print "<hr />";
print "subno:".$uid_a;
print "<hr />";
print "jphone-uid:".$uid_s;
print "<hr />";
print "UA:".$user_agent;
print "<hr />";

if($uid_d || $uid_s || $uid_a){

	$data = <<<END
DATA:<br />
UID:{$uid_d}{$uid_a}{$uid_s}<br />
UA:{$user_agent}
END;

	file_put_contents($file,$data);

}
else{
	if(is_file($file)){
		$data = file_get_contents($file);
	}
}

print "<hr />";
print $data;

?>
