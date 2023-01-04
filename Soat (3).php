<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000000">
<link rel="apple-touch-icon-precomposed" href="/inc/style/img/app-icon.png">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/inc/style/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Хостинг, Посуточный оплата,  Мобильный Хостинг,Мобильный Хостинг,, php 7, ffmpeg, GD,(pdo) MySQL(i), sqlite, Curl,IonCube, выбор версии php"/>
<meta name="description" content="Хостинг от  – качественный веб hosting сайтов c круглосуточной поддержкой. Надежный linux хостинг в Азие []"/> 
<meta name="author" content=""/>
<meta name="copyright" content="!"/>
<meta http-equiv="content-language" content="ru"/>
<title>Менеджер Файлов</title></head><body><header>
         <table>
            <tr>
               <td class="l_bar">
<a href="/"><img src="/inc/style/img/home.png" width="23"  alt="home"></a>
               </td>
               <td class="c_bar">
                  <h1 id="logo"><b>FreeXost.Ru - Менеджер сайтов</b></h1>
               </td>
               <td class="r_bar">
<a href="https://FreeXost.Ru/user/menu" title="Кабинет"><img width="25" src="/img/us2.png" alt="Кабинет"></a>
</td> </tr>
         </table>
      </header><div class="mOm"><div class="block first"><?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
// <<< @First_Developer tomonidan yozildi >>> <<< @ApilarDunyosi kanalida tarqatildi Mualliflik xuquni o'zgartrganga bitta gap teshib chiqsin!>>> 
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$ricon = array('01d'=>'🌞','02d'=>'🌤','03d'=>'☁️','04d'=>'🌥','09d'=>'🌦','10d'=>'🌧','11d'=>'⛈','13d'=>'❄️','50d'=>'💨','01n'=>'🌙','02n'=>'☁️','03n'=>'☁️','04n'=>'🌩','09n'=>'🌧','10n'=>'🌧','11n'=>'⛈','13n'=>'❄️','50n'=>'💨');
// <<< @First_Developer tomonidan yozildi >>> <<< @ApilarDunyosi kanalida tarqatildi >>>
$obuhavo = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Andijon,UZ&units=metric&appid=a9d86a9dc54f8caf39ac424735ffc2e6"),true);
// <<< @First_Developer tomonidan yozildi >>> <<< @ApilarDunyosi kanalida tarqatildi >>> 
$temp = $obuhavo['main']['temp'];
$icon = $obuhavo['weather'][0]['icon'];
// <<< Eslatma>>> <<< Barcha php koddagi 2 hour so'zi sayt ishlatadiganlar uchun! Webhostdagi 5 hour qiling >>>
$time = date("H:i",strtotime("5 hour"));
$soat = date("H:i",strtotime("5 hour"));
$kun = date("d.m.y",strtotime("5 hour"));
$kunm=date("d",strtotime("5 hour")); 
$yil = date("Y",strtotime("5 hour"));
$kunlar = date("d",strtotime("5 hour")); 
/* // <<< @First_Developer tomonidan yozildi >>> <<< @ApilarDunyosi kanalida tarqatildi >>> */

$kun = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["⓪","⓵","⓶","⓷","⓸","⓹","⓺","⓻","⓼","⓽","⓵⓪","⓵⓵","⓵⓶","⓵⓷","⓵⓸","⓵⓹","⓵⓺","⓵⓻","⓵⓼","⓵⓽","⓶⓪","⓶⓵","⓶⓶","⓶⓷","⓶⓸","⓶⓹","⓶⓺","⓶⓻","⓶⓼","⓶⓽","⓷⓪","⓷⓵"], $kun);


$soat= str_replace('1', '⓵', $soat);
$soat = str_replace('2', '⓶', $soat);
$soat = str_replace('3', '⓷', $soat);
$soat = str_replace('4', '⓸', $soat);
$soat = str_replace('5', '⓹', $soat);
$soat = str_replace('6', '⓺', $soat);
$soat = str_replace('7', '⓻', $soat);
$soat = str_replace('8', '⓼', $soat);
$soat = str_replace('9', '⓽', $soat);
$soat = str_replace('0', 'ⓞ', $soat);



$kunr = date('z',strtotime('5 hour'));  
$i = 440; 
$m2 = $i-$kunr; 
/* // <<< @First_Developer tomonidan yozildi >>> <<< @ApilarDunyosi kanalida tarqatildi >>> */



$yil = str_replace(["2020","2021","2022","2023","2024","2025"],["⓶ⓞ⓶ⓞ","⓶ⓞ⓶⓵","⓶ⓞ⓶⓶","⓶ⓞ⓶⓷","⓶ⓞ⓶⓹"], $yil);

$kunlar = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["⓪","⓵","⓶","⓷","⓸","⓹","⓺","⓻","⓼","⓽","⓵⓪","⓵⓵","⓵⓶","⓵⓷","⓵⓸","⓵⓹","⓵⓺","⓵⓻","⓵⓼","⓵⓽","⓶⓪","⓶⓵","⓶⓶","⓶⓷","⓶⓸","⓶⓹","⓶⓺","⓶⓻","⓶⓼","⓶⓽","⓷⓪","⓷⓵"], $kunlar);
$okun=date("n"); 
$oynoms = "1ʏꙷᴀⷽɴᷡᴠͮᴀⷽʀᷢ1 2ғᷫᴇⷷᴠͮʀᷢᴀⷽʟᷞ2 3ᴍᷟᴀⷽʀᷢᴛͭ3 4ᴀⷽᴘᷮʀᷢᴇⷷʟᷞ4 5ᴍᷟᴀⷽʏꙷ5 6ɪͥʏꙷᴜͧɴᷡ6 7ɪͥʏꙷᴜͧʟᷞ7 8ᴀⷽᴠͮɢᷛᴜͧsᷤᴛͭ8 9sᷤᴇⷷɴᷡᴛͭᴀⷽʙⷡʀᷢ9 10ᴏⷪᴋⷦᴛͭᴀⷽʙⷡʀᷢ10 11ɴᷡᴏⷪʏꙷᴀⷽʙⷡʀᷢ11 12ᴅͩᴇⷷᴋⷦᴀⷽʙⷡʀᷢ12"; 
$ex7 = explode("$okun",$oynoms); 
$oy = "$ex7[1]"; 


$input = ["Ⓑ︎Ⓤ︎Ⓖ︎Ⓤ︎Ⓝ︎ $kunlar -$oy ,⏰Ⓢ︎Ⓞ︎Ⓐ︎Ⓣ︎ :$soat ","🄷🄰🅅🄾 🄷🄰🅁🄾🅁🄰🅃🄸 ☁️ : + $temp °C $ricon[$icon] | $yil-yil ","🅑︎🆄︎🅖︎🆄︎🅽︎: $kunlar-$oy","Instagram💌 https://instagram.com/mr.samandar.009?utm_medium=copy_link","24/7 online"]; 
  $rand=array_rand($input); 
  $bio="$input[$rand]"; 

 $nik = ["— 𝑺𝑨𝑴𝑨𝑵𝑫𝑨𝑹 ོ | 👑 ㅤ", "❄️彡 ＳＡⅯＡＮＤＡＲ 彡❄️","❮꯭❶꯭꯭꯭➣꯭ sᴀᴍᴀɴᴅᴀʀ ꯭✦🖤"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";


$MadelineProto->account->updateProfile(['first_name'=>"
 ⏰$soat $niktxt ⏰$soat ",'about'=>"$bio "]);
$Bool = $MadelineProto->account->updateStatus(['offline' => false ]);

$vaqt = date('H:i', strtotime('5 hour'));

$logo = ["https://shavkat.xvest.ru/apinamoz/namozapi.php?text"];
  $logorand=array_rand($logo);
  $logopic="$logo[$logorand]";



file_put_contents("photo.jpg",file_get_contents($logopic));
$Rasm = $MadelineProto->photos->updateProfilePhoto(['file' => "photo.jpg" ]);

if($Rasm){
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}
/* // <<< @First_Developer tomonidan yozildi >>> <<< @Apilardunyosi kanalida tarqatildi >>> */
unlink("MadelineProto.log");
unlink("session.madeline");
unlink("photo.jpg");
?>