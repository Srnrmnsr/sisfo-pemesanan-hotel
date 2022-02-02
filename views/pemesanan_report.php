<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Pemesanan</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th width="17%">Nama</th><th>Tanggal Masuk</th><th width="14%"><center>Tanggal keluar</center></th><th width="15%">Jumlah Kamar</th><th width="10%">Tipe Kamar</th><th>Total Harga</th>
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
                                    <td>
                                        <a href="report/pemesanan_satu.php?id=<?= $data['id_booking'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/pemesanan_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Reservasi

                                    </a>
                                    
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


