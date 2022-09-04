<?php
$status = 0;
if ($status == 0){
$statusstr = "Выкл";
$statusled = "red"; }
else if ($status == 1){
$statusstr = "Вкл";
$statusled = "green"; }
?>
<div class="col">
 <h2>Состояние:</h2>
 <h3><?php echo $statusstr ?></h3>
 <img src="img/<?php echo $statusled ?>.jpg" style="width:15%; display: inline">
 </div>