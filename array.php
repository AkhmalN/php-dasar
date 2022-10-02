<?php

   // $number = array(1,2,3,4,5);
   // var_dump($number);
   // $name = ['donald', 'mickey', 'mouse', 'jennie'];
   // var_dump($name);


   // // melihat data array?
   // echo $name[0];
   // // var_dump($name[1]);


   // // merubah dara array?
   // $name[0] = 'jezze';
   // echo $name[0];

   // var_dump($name);

   // // menghapus data di array?
   // unset($name[0]);
   // var_dump($name);

   // // menambahkan data di array?
   // $name[] = 'trump';
   // var_dump($name);

   // // melihat jumlah data didalam array?
   // var_dump(count($name)); 


   $employee = array(
      "id" => "12232",
      "name" => "Juniardo",
      "age" => "20",
      "position" => "HR",
      "address" => [
         "city" => "Bekasi",
         "country" => "Indonesia"
      ]
   );
   var_dump($employee);
   // print_r(count($employee));
?>