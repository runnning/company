<?php
/*$sub='abcdefghijkdef';
$pa='/def$/';
$num=preg_match($pa,$sub,$matches,PREG_OFFSET_CAPTURE,1);
var_dump($matches);
var_dump($num);*/

/*$sub='abcdefghijkdefabcedfdefxyzdef';
$pa='/(def)(abc)/';
//$num=preg_match_all($pa,$sub,$matches,PREG_PATTERN_ORDER);
//$num=preg_match_all($pa,$sub,$matches,PREG_SET_ORDER);
$num=preg_match_all($pa,$sub,$matches,PREG_OFFSET_CAPTURE);
var_dump($matches);
var_dump($num);*/

/*$sub=['abc','def','abcdef','defabc'];
$pat='/def$/';
//$grep=preg_grep($pat,$sub);
$grep=preg_grep($pat,$sub,PREG_GREP_INVERT);
var_dump($grep);*/

//$string='I like apple,no reason';
/*$string=['I like apple,no reason','ywn like apple,no reason'];
$pat=['/no/','/reason/'];
$rep=['why','?'];
$res= preg_replace($pat,$rep,$string);
var_dump($res);*/

/*$sub=['1','2'];
$pat=['/\d/'];
$rep=['A:$0'];
var_dump(preg_filter($pat,$rep,$sub));*/

/*$sub='I like apple,and you';
$pat='/[\s,]+/';
var_dump(preg_split($pat,$sub));*/

/*$textbody = "This book is *very* difficult to find.";
$word = "*very*";
$textbody = preg_replace ("/" . preg_quote($word, '/') . "/", "<i>" . $word . "</i>", $textbody);
echo $textbody;*/
