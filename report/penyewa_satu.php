<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penyewa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_penyewa WHERE id_penyewa ='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Reservasi Hotel Nusa Indah Kisaran </h2>
                        <h4>Jl. Ahmad Yani, Kisaran Naga, Kisaran <br>
                              Kabupaten Asahan, Sumatera Utara 21216</h4>
                        <hr>
                        <h3>DATA PENYEWA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama Penyewa</td> <td><?= $data['nama_penyewa'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
								<tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jenkel'] ?></td>
                                </tr>
								<tr>
                                    <td>Nomor KTP</td> <td><?= $data['no_ktp'] ?></td>
                                </tr>
								<tr>
                                    <td>Nomor Telepon</td> <td><?= $data['notelp'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Manajer, S.M<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>