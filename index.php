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
                                <select class="form-control" id="select-bagian">
                                    <option value="">KABALAI</option>
                                    <option value="">SUB BAGIAN UMUM</option>
                                    <option value="">SUB BAGIAN PE</option>
                                    <option value="">BIDANG INFOKOM</option>
                                    <option value="">SEKSI KIMIA</option>
                                    <option value="">SEKSI MIKRO</option>
                                    <option value="">SEKSI INSPEKSI</option>
                                    <option value="">SEKSI SERTIFIKASI</option>
                                    <option value="">BIDANG PENINDAKAN</option>
                                    <option value="">HONORER</option>
                                    <option value="">DRIVER</option>
                                    <option value="">PRAMUBAKTI</option>
                                    <option value="">PRAMUBAKTI 2</option>
                                </select>
                            </div>
                            <!-- END select Bagian -->

                            <div class="form-group">
                                <label for="select-tahun">Pilih Tahun</label>
                                <select class="form-control" id="select-tahun">
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
                                <select class="form-control" id="select-bulan">
                                    <option value="">Januari</option>
                                    <option value="">Februari</option>
                                    <option value="">Maret</option>
                                    <option value="">April</option>
                                    <option value="">Mei</option>
                                    <option value="">Juni</option>
                                    <option value="">Juli</option>
                                    <option value="">Agustus</option>
                                    <option value="">September</option>
                                    <option value="">Oktober</option>
                                    <option value="">November</option>
                                    <option value="">Desember</option>
                                </select>
                            </div>
                            <!-- END select Bulan -->

                            <div class="float-right">
                                <button class="btn btn-primary" onclick="cari()">Cari</button>
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

                            <div id="myPDF">
                                <a class="media" href="file/absen1.pdf"></a>
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
    <script src="node_modules/gdocviewer/jquery.gdocsviewer.min.js"></script>

    <script type="text/javascript" src="node_modules/jquery-metadata/jquery.media.js"></script> 
    <script type="text/javascript" src="node_modules/jquery-metadata/jquery.metadata.js"></script> 


    <script>
    $( document ).ready(function() {
        document.getElementsByClassName("media")[0].style.width = "100%";
        document.getElementsByTagName("iframe")[0].style.width = "100%";
        // document.getElementsByTagName("iframe")[0].setAttribute("height", "100");  
    });
        // $(function () {
        //     $("#myPDF").pdf({
        //         source: "file/absen1.pdf",
        //         // MORE SETTINGS HERE
        //     });
        // });

        // $('a.media').media({width:700,height:500});
        $('a.media').media();
    </script>
</body>

</html>