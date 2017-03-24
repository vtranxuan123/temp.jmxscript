<?php
$s='';
$base='never.use.this.pls';
for($i = 1000; $i<=2000;++$i){
	$email = $base.$i.'@gmail.com,a'."\r\n";
	$s .= $email;
}
file_put_contents('data/data1.csv',$s);
echo 'DONE';
?>
