<?php
$ipClient=$_SERVER["REMOTE_ADDR"];
$content = file_get_contents('http://ipgeobase.ru/?address='.$ipClient);
$pos=strpos($content,'<tr><td style="font-weight:bold;">Город</td>');
echo $pos;
/*$cityClient*/
 ?>