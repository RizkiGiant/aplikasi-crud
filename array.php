<?php
      $nama = "Rizky Catur";

      Echo $nama  . "<br>";

      $nama_array = array("faris", "Eben", "Haikal", "Rizki Giant", "Indra");
      print_r($nama_array); echo "<br>";


      echo $nama_array[0] . "<br>";
      echo $nama_array[1] . "<br>";
      echo $nama_array[2] . "<br>";

      echo "<hr>";
      // Versi Foreach
      foreach ($nama_array AS $datanama) {
        echo $datanama . "<br>";
      }

      echo "<hr>";
      //Versi for
      for ($i = 0; $i < COUNT ($nama_array); $i++) {
        echo $nama_array[$i] . "<br>";
      }

      echo "<hr>";
      // Multiple Array
      $kelas11rpl1 = array(
        array("Rizky Catur", "L", "Mancing"),
        array("Eben", "L", "Main Bola"),
        array("Fariz", "L", array("Berenang", "Main Game", "Basket") ),
        array("voly", array("Main Kelereng", array("Main Layangan"))) 
      );

      echo "<pre>";
      print_r($kelas11rpl1);
      echo "</pre>";

      echo "<hr>";
      echo $kelas11rpl1[1][0] . " ";
      echo $kelas11rpl1[2][2][0] . " ";
      echo $kelas11rpl1[3][1][1][0] . " ";
      echo $kelas11rpl1[0][2];
     
      ?>