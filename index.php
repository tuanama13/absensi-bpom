<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="absensi, bppom">
    <!-- <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors"> -->
    <!-- <meta name="generator" content="Jekyll v3.8.5"> -->

    <title>Absensi | BPPOM</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">

    <style>
        iframe {
            max-width: 100%;
        }
    </style>
</head>

<body>
       
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mb-3"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Absensi</h5>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="select-bagian">Pilih Bagian</label>
                                <select class="form-control" name="select-bagian" id="select-bagian">
                                    <option value="KABALAI">KABALAI</option>
                                    <option value="SUB BAGIAN UMUM">SUB BAGIAN UMUM</option>
                                    <option value="SUB BAGIAN PE">SUB BAGIAN PE</option>
                                    <option value="BIDANG INFOKOM">BIDANG INFOKOM</option>
                                    <option value="SEKSI KIMIA">SEKSI KIMIA</option>
                                    <option value="SEKSI MIKRO">SEKSI MIKRO</option>
                                    <option value="SEKSI INSPEKSI">SEKSI INSPEKSI</option>
                                    <option value="SEKSI SERTIFIKASI">SEKSI SERTIFIKASI</option>
                                    <option value="BIDANG PENINDAKAN">BIDANG PENINDAKAN</option>
                                    <option value="HONORER">HONORER</option>
                                    <option value="DRIVER">DRIVER</option>
                                    <option value="PRAMUBAKTI">PRAMUBAKTI</option>
                                    <option value="PRAMUBAKTI 2">PRAMUBAKTI 2</option>
                                </select>
                            </div>
                            <!-- END select Bagian -->

                            <div class="form-group">
                                <label for="select-tahun">Pilih Tahun</label>
                                <select class="form-control" name="select-tahun" id="select-tahun">
                                    <?php
                                        $tahun = 2019;
                                        for ($i=0; $i < 5; $i++) { 
                                        ?>
                                    <option value="<?php echo $tahun+$i ?>"><?php echo $tahun+$i ?></option>

                                    <?php
                                        echo $i;
                                        //    $tahun = $tahun + $i;
                                        }
                                    ?>
                                </select>
                            </div>
                            <!-- END select Tahun -->

                            <div class="form-group">
                                <label for="select-bulan">Pilih Bulan</label>
                                <select class="form-control" name="select-bulan" id="select-bulan">
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                            <!-- END select Bulan -->

                            <div class="float-right">
                                <button class="btn btn-primary" onclick="caridata()">Cari</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mb-3"></div>

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="">Dokumen 1</a></li>
                                <li class="list-group-item"><a href="">Dokumen 2</a></li>
                                <li class="list-group-item"><a href="">Dokumen 3</a></li>
                                <li class="list-group-item"><a href="">Dokumen 4</a></li>
                                <li class="list-group-item"><a href="">Dokumen 5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END col-4 -->
            </div>
            <!-- END col-4 -->
            
            <div class="mb-3"></div>

            
            <div class="col-md-9 col-12">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Absensi</h5>

                            <!-- <div class="pdfview">
                            <a href="file/absen1.pdf" id="embedURL">Download file</a>
                        </div> -->

                            <div class="jumbotron jumbotron-fluid">
                                <div class="container">
                                    <h1 class="display-4">Aplikasi Absensi BPOM</h1>
                                    <p class="lead">Aplikasi Pelaporan Absensi BPOM Kota Pontianak V.1</p>
                                </div>
                            </div>

                            <div id="myPDF">
                                <a class="media" id="media" href="file/absen1.pdf"></a>

                                <!-- <a class="media {type: 'html'}" href="../">HTML File</a>  -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END col-6 -->


        </div>
        <!-- END row -->
    </div>
    <!-- END Container -->

    
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="node_modules/gdocviewer/jquery.gdocsviewer.min.js"></script> -->
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <script type="text/javascript" src="plugins/jquery-media/jquery.media.js"></script> 
    <script type="text/javascript" src="plugins/jquery-metadata/jquery.metadata.js"></script> 


    <script>
        $( document ).ready(function() {
            
            // document.getElementsByTagName("iframe")[0].setAttribute("height", "100");  
            
        });

        function responsive() {
            document.getElementsByClassName("media")[0].style.width = "100%";
            document.getElementsByTagName("iframe")[0].style.width = "100%";
        }

        // $('a.media').media().hide();

        function caridata() {
            var bagian = $("#select-bagian").val();
            var tahun = $("#select-tahun").val();
            var bulan = $("#select-bulan").val();
            
            console.log(bagian);
            

            $.post("cari.php", {
                    bagian: bagian,
                    tahun:tahun,
                    bulan:bulan
                })
                .done(function (data) {
                    // $("#table").html(data);
                    console.log(data);

                    if (data !== '0') {
                        $(".jumbotron").hide();
                        $(".media").media().attr("href", "file/"+data);
                        responsive();
                    }else{
                        // console.log("Maaf Data yang Diminta Kosong");
                        // $("#media").media().hide();
                        Swal.fire({
                            title: 'Warning',
                            text: "Maaf Data Yang Ada Minta Kosong",
                            type: 'warning',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Oke'
                            });

                        }
                    

                    // var apa =  $('a.media').media();
                    // console.log(apa);
                    

                    
                    // $('a.media').media();

                    
                });
        }
    
        
    </script>
</body>

</html>