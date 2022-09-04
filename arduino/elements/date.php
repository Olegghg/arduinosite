<?php
date_default_timezone_set("Europe/Moscow");
$days = array(
 'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
 'Четверг', 'Пятница', 'Суббота',
);
$month = array(
  'Января', 'Февраля', 'Марта', 'Апреля',
  'Мая', 'Июня', 'Июля', 'Августа',
  'Сентября', 'Октября', 'Ноября', 'Декабря',
);
$date = 'Сегодня ' . date('d') . ' ' . $month[(date('n') - 1)] . ' ' . date('Y') . ' года. ' . $days[(date('w'))];
echo $date
?>
<div id="timer"></div>
<script type="text/javascript">
function startTime()
{
var tm=new Date();
var h=tm.getHours();
var m=tm.getMinutes();
var s=tm.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('timer').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}
function checkTime(i)
{
if (i < 10)
{
i="0" + i;
}
return i;
}
</script>