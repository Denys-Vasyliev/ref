<?
$ffs = scandir('.');
$arr = array();
foreach($ffs as $ff){
if (strpos($ff,'.txt')!=0) {
            array_push($arr, $ff);
        }
}

$f_name = $arr[array_rand($arr)];
$lines = file($f_name);
$url = $lines[array_rand($lines)];
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
redirect($url)
?>