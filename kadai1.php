
  <?php
echo 'hello php!';
echo ("\n");
//1.$aに3を、$bに７を代入,$a+$bの結果を表示
$a = 3;
$b = 7;
//1.$a + $b =$ab
echo $a +=$b;
echo ("\n");

//2.$array_month に1月〜12月の文字列を代入し8月を表示、
$array_month = ["1月", "2月", "3月", "4月","5月","6月","7月","8月"];
//2. 8月 を取り出して表示する。
echo $array_month[7];
echo ("\n");

//3.“Hello, あなたの名前’s World!” と表示
$hello = "Hello";
$name = "YUKI";
$world = "‘s World!";
//3.
echo $hello . $name . $world;
echo ("\n");

//4.複合演算を使ってtech boost」と表示
$tech_boost = "tech" . "boost";
//4
echo $tech_boost;
echo ("\n");

//5どこにバグが有るか調べて修正
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
// 5.12月を表示する
echo $calendar_2018["December"];
echo ("\n");
?>
