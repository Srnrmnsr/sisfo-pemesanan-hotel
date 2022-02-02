<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pemesanan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
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
                        <h3>DATA SELURUH RESERVASI</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th>Nama Penyewa</th><th>Tanggal Masuk</th><th>Tanggal Keluar</th><th>Jumlah Kamar</th><th>Tipe Kamar</th><th>Total harga</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = " SELECT * FROM tbl_booking LEFT JOIN  tbl_penyewa ON tbl_booking.id_penyewa=tbl_penyewa.nama_penyewa join tbl_tipe_kamar on tbl_booking.jenis_kamar=tbl_tipe_kamar.id_kamar";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nama_penyewa'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['tgl_keluar'] ?></td>
                                    <td><?= $data['jlh_kamar'] ?></td>
                                    <td><?= $data['tipe_kamar'] ?></td>
                                    <td><?= $data['total_harga'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
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
