<?php
 $arduinoip = "192.168.1.9";
 ?>
 <?php
 if ($nm == "slave"){
 $hidden = "hidden";}
 else {$hidden = " ";}
 ?>
 <div style="height: 100%; width: 100%; margin: 5%;">
 <h3 style="width: 100%; background: #ffb6c1; text-align: center;">Статус</h3>
 <div class="container" style="text-align: center;">
 <div class="row ">
 <?php include "status.php" ?>
 <div class="col" id="manage" <?php echo $hidden ?>>
 <h2>Управление:</h2>
 <p><a class="btn btn-success btn-lg active" href="http://<?php echo $arduinoip?>/<?php echo $bvkl?>" target="_blank">Вкл</a>
 <a class="btn btn-danger btn-lg active" href="http://<?php echo $arduinoip?>/<?php echo $bvikl?>" target="_blank">Выкл</a></p>
 </div>
 </div>
 </div>
 <h3 style="width: 100%; background: #dda0dd ; text-align: center;">График температуры</h3>
 <div class="container">
 <canvas id="Temperature" width="600" height="400"></canvas>
 </div>
 <h3 style="width: 100%; background: #dda0dd ; text-align: center;">График влажности</h3>
 <div class="container">
 <canvas id="humidity" width="600" height="400"></canvas>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 </div>