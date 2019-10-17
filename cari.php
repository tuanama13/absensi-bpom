<?php
    include "init/db.php";

    $bagian = $_POST['bagian'];
    $tahun = $_POST['tahun'];
    $bulan = $_POST['bulan'];

    // print_r($_POST);

    $sql = "SELECT * FROM absensi WHERE bagian='$bagian' AND tahun='$tahun' AND bulan='$bulan'";
    // nilai 0 = delete no
    $run_sql = mysqli_query($conn, $sql);

    $num_row = mysqli_num_rows($run_sql);
    $rows = mysqli_fetch_assoc($run_sql);

   if (empty($num_row)) {
       echo "0";
   }else {
       echo $rows['file'];
   }