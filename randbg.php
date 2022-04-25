<?php
  $bg = array('bg/1.png', 'bg/2.png', 'bg/3.png', 'bg/4.png', 'bg/5.png', 'bg/6.png', 
  'bg/7.png', 'bg/8.png', 'bg/9.png', 'bg/10.png', 'bg/11.png', 'bg/12.png', 'bg/13.png'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<style type="text/css">

    body{
    background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(<?php echo $selectedBg; ?>) no-repeat;
    background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;              /* optional, center the image */
    }

</style>