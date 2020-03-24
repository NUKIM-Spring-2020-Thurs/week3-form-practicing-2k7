<meta http-equiv="Content-Type" content="text/html ; charset=utf-8"/>

<?php 

$name=$_POST["name"];
$FB=$_POST["FB"];
$gender=$_POST["gender"];
$birthday=$_POST["birthday"];
$ID=$_POST["sid"];
$tel=$_POST["telephone_num"];
$cell=$_POST["cellphone_num"];

$name2=$_POST["name2"];
$name2R=$_POST["name2R"];
$name2T=$_POST["name2T"];

$live=$_POST["live"];
$address=$_POST["address"];
$mail=$_POST["mail"];
$school=$_POST["school"];
$grade=$_POST["grade"];

$interest=$_POST["interest"];

$clothsize=$_POST["clothsize"];
$food=$_POST["food"];
$foodtype=$_POST["foodtype"];
$sickness=$_POST["sickness"];
$come=$_POST["come"];
$back=$_POST["back"];



echo "你的姓名:".$name." <br/>";
echo "你的FB:".$FB."<br/>";
echo "你的性別:".$gender."<br/>";
echo "你的生日:".$birthday."<br/>";
echo "你的身分證字號:".$ID."<br/>";
echo "你的聯絡電話:".$tel."<br/>";
echo "你的聯絡手機:".$cell."<br/>";

echo "你的緊急聯絡人姓名:".$name2."<br/>";
echo "緊急聯絡人關係:".$name2R."<br/>";
echo "緊急聯絡人電話/手機:".$name2T."<br/>";


$livenumber=count($live);

for ($i=0; $i <$livenumber ; $i++) { 
	echo "你的居住地:".$live[$i]."<br/>";
}



//echo "你的居住地".$live."<br/>";
echo "你的地址:".$address."<br/>";
echo "你的E-mail:".$mail."<br/>";
echo "你的學校:".$school."<br/>";
echo "你的年級:".$grade."<br/>";


// $interestNO=count($interest);
// for ($j=0; $j <$interestNO ; $j++) { 
// echo "感興趣的項目:".$interest[$j]."<br/>";
// }

// echo "感興趣的項目:".implode(",",$interest)."<br/>";

foreach ($interest as $key => $value) {
	echo "感興趣的項目:".$value."<br/>";
}


//echo "你感興趣的項目:".$."<br/>";

echo "營服尺寸:".$clothsize."<br/>";
echo "你吃葷食 / 素食:".$food."<br/>";
echo "你的特殊飲食習慣:".$foodtype."<br/>";
echo "你的特殊疾病:".$sickness."<br/>";
echo "你如何前來營隊:".$come."<br/>";
echo "你如何回家:".$back."<br/>";



$comment=$_POST["comment"];
// echo nl2br($comment);
echo "你想說的話:".nl2br(htmlspecialchars($comment))."<br/>";







 ?>