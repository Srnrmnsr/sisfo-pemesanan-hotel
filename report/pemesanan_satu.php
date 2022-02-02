<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pemesanan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = " SELECT * FROM tbl_booking LEFT JOIN  tbl_penyewa ON tbl_booking.id_penyewa=tbl_penyewa.nama_penyewa join tbl_tipe_kamar on tbl_booking.jenis_kamar=tbl_tipe_kamar.id_kamar";
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
                        <h3>DATA RESERVASI</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nama</td> <td><?= $data['nama_penyewa'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Keluar</td> <td><?= $data['tgl_keluar'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Kamar</td> <td><?= $data['jlh_kamar'] ?></td>
                                </tr>
								<tr>
                                    <td>Tipe Kamar</td> <td><?= $data['tipe_kamar'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tipe Kamar</td> <td><?= $data['total_harga'] ?></td>
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
