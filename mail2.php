<?php
$post2 = (!empty($_POST)) ? true : false;
if($post2) {
	$name2 = $_POST['name2'];
	$tel2 = $_POST['tel2'];
	$sub2 = 'callback2'; 
	$error2 = '';
	if(!$name2) {$error2 .= 'Укажите свое имя. ';}
	if(!$tel2) {$error2 .= 'Укажите свой телефон. ';}
	if(!$error2) {
		$address2 = "aleksandra1sn1@gmail.com"; // ВНИМАНИЕ! Здесь указываем адрес электронной почты, на которую будут приходить письма
		$mes2 = "Имя: ".$name2."\n\nТелефон: " .$tel2."\n\n";
		$send2 = mail ($address2,$sub2,$mes2,"Content-type:text/plain; charset = UTF-8\r\nFrom:$name2");
		if($send2) {echo 'OK2';}
	}
	else {echo '<div class="err">'.$error2.'</div>';}
}
