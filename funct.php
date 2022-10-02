<?php

use function PHPSTORM_META\map;

   function perkenalan($nama, $alamat)
   {
      echo 'nama saya', $nama;
      echo 'alamat' , $alamat;
   }

   perkenalan('akhmal', 'indonesia');

   function umur($tahun)
   {
      $umur_saya = date('Y') - $tahun;

      return $umur_saya;
   }


   echo 'umur saya adalah ' .umur(2001);


   function pemesanan(
      $nama_pemesan,
      $tanggal_pesanan,
      $alamat_pemesanan
      )
   {
      $data_pesanan = []; 

      if($alamat_pemesanan or $nama_pemesan or $tanggal_pesanan === '')
      {
         echo 'tidak sesuai';
      }
      else{
         $data_pesanan.array_push($nama_pemesan, $tanggal_pesanan, $alamat_pemesanan);
         echo $data_pesanan;
      }
   }
   pemesanan('Akhmal', date('d-m-y'), 'Depok');

   
?>