<?php
require_once "../src/WordBreaker.php";

#use PhlongTaIam\WordBreaker as WordBreaker;
$wordBreaker = new WordBreaker("../data/tdict-std.txt");
foreach($wordBreaker->breakIntoWords("ฉันกินข้าวชิมิ") as $w) {
	print "<li>$w</li>\n";
}
echo "Hello!!";
?>
