<?php
  $title = "Monitoring";
  $home = 'class="nav-item"';
  $home2 = 'class="nav-link active"';
  $ps12 = 'class="nav-link text-white"';
  $ps22 = 'class="nav-link text-white"';
  $ps32 = 'class="nav-link text-white"';
  $ps42 = 'class="nav-link text-white"';
  $style = 'height: 100vh;';
  require "main.php";
  ?>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 g-2">
        <?php
        $text = "First power socket. Connected to server1.";
        $link = "/ps1.php";
        $text2 = "ps1";
        require "elements/card.php";
        ?>
        <?php
        $text = "Second power socket. Connected to server2.";
        $link = "/ps2.php";
        $text2 = "ps2";
        require "elements/card.php";
        ?>
        <?php
        $text = "Third power socket. Connected to R1.";
        $link = "/ps3.php";
        $text2 = "ps3";
        require "elements/card.php";
        ?>
        <?php
        $text = "Fourth power socket. Connected to SW1.";
        $link = "/ps4.php";
        $text2 = "ps4";
        require "elements/card.php";
        ?>
      </div>
    </div>
  </div
<?php
  require "footer.php";
?>