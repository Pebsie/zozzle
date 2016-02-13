<?php

	$t = $_GET['t']; //ignored for now

	//if ($t == "gen") {
	//	$l = array("b", "c", "f", "z", "m", "t", "p");
	//	$f = array("ozzle", "ip", "rip", "op", "ipple", "ism", "able", "ool");
	//	$word1 = $l[rand(1, count($l))].$f[rand(1, count($f))];
	//	$word2 = $l[rand(1, count($l))].$f[rand(1, count($f))];
	//	$disWord = $word1." ".$word2;
	//} else {
		$word = array("tip top", "zippity", "zoopity", "bib-bop-bong", "zongba", "zim-zam", "flim-flam", "fozzle-cozzle", "zozzle", "zozzle", "zozzle", "zozzle", "zozzle-mozzle", "fozzle", "bippity bap", "moobity", "zobby", "fabby", "flabby", "commily", "fommily", "zozzle", "wozzle", "flop", "floppity", "mibby mibby", "zibby zibby", "zim zam zom zopple", "zopple", "zapple", "zoozle");
		$disWord = $word[rand(1, count($word))]." ".$word[rand(1, count($word))];
	//}

	echo "<head><title>".$disWord."</title></head>";
?>
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<? echo "<body bgcolor='Black' link='White' onload='responsiveVoice.speak(`".$disWord."`);'>"; ?>
<font face='Arial' color='White' size='32'>
<center><img src='img/logo.png'><br><br>
<h3>
<?

	echo $disWord."</h3>";
	echo "<br><br><a href='http://twitter.com/share?text=".$disWord."%20%23zozzle'>Twozzle!</a> - <a href='index.php'>Zozzle!</a> - <a href='http://zozzle.club/mail'>Mail</a>";

?>
</h3>
