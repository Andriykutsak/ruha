<?php 
/* Функция фильтрации тесктовых данных. */ 
function text($var) 
{ 
return htmlspecialchars($var, ENT_QUOTES, 'utf8'); 
} 


/* Функция время и даты. */ 
function time_autoformat($ts, $full = false){
  if($full){
        $d = ''; $t = $ts;
        $d1 = (floor($t/31622400)>0) ? floor($t/31622400) : '';
        $d2 = (floor($t/2635200)>0) ? floor($t/2635200) % 12 : '';
        $d3 = (floor($t/86400)>0) ? floor($t/86400) % 30 : '';
        $d4 = (floor($t/3600)>0) ? floor($t/3600) % 24 : '';
        $d5 = floor($t/60) % 60;
        if($d1) $d .= sklonen($d1,'год ','года ','лет ');
        if($d2) $d .= sklonen($d2,'месяц ','месяца ','месяцев ');
        if($d3) $d .= sklonen($d3,'день ','дня ','дней ');
        if($d4) $d .= sklonen($d4,'час ','часа ','часов ');
        if($d5) $d .= sklonen($d5,'минута  ','минуты ','минут ');
        return $d;
    } else {
        $sec = $ts;
        $min = round($ts/60);
        $hour = round($ts/3600);
        $days = round($ts/86400);
        $month = round($ts/2635200);
        $years = round($ts/31622400);    
        if($sec>60) return $sec.' сек.';    
        if($min<60) return $min.' мин.';    
        if($hour<24) return sklonen($hour,'час','часа','часов',false);    
        if($days<31) return sklonen($days,'день','дня','дней',false);    
        if($month<12) return sklonen($month,'месяц','месяца','месяцев',false); 
        else return sklonen($years,'год','года','лет',false);
    }
}    
 
function sklonen($n,$s1,$s2,$s3, $b = false){
    $m = $n % 10; $j = $n % 100;
    if($m==1) $s = $s1;
    if($m>=2 && $m<=4) $s = $s2;
    if($m==0 || $m>=5 || ($j>=10 && $j<=20)) $s = $s3;
    if($b) $n = '<b>'.$n.'</b>';
    return $n.' '.$s;
}
 



/* Функция фильтрации числовых данных. */ 
function int($var) 
{ 
return abs(intval($var)); 
}

/*Смайлы. */
function smile($msg)
{
$msg = trim($msg);
$s = mysql_query("SELECT * FROM `smile` ORDER BY `id` DESC");
while($smile = mysql_fetch_array($s))
{
$msg = str_replace($smile['name'],' <img src="'.$HOME.'/img/smile/'.$smile['icon'].'" alt="'.$smile['name'].'"/> ',$msg);
}
return $msg;
}

/*Фильтрация комнат. */

function quote($value) {

if(!is_numeric($value)) {

$value = "'".mysql_real_escape_string($value)."'";

}

return $value;

}

?>