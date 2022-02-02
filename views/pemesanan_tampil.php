<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Pemesanan</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>Nama Penyewa</th><th>Tanggal Masuk</th><th>Tanggal Keluar</th><th>Jumlah Kamar</th><th>Tipe Kamar</th><th>Harga/Kamar</th><th>Total harga</th><th>ACTIONS</th>
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
                                    <td>Rp. <?= $data['harga'] ?></td>
                                    <td>Rp. <?= $data['total_harga'] ?></td>
                                    <td>
                                        <!--<a href="?page=arsip&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span> 
                                        </a>-->
                                        <!--<a href="?page=pemesanan&actions=edit&id=<?= $data['id_booking'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>-->
                                        </a>
                                        <!--<a href="?page=peminjaman&actions=tambah&nope=<?= $data['no_perkara'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-arrow-right"></span>
                                        </a>-->
                                        <a href="?page=pemesanan&actions=delete&id=<?= $data['id_booking'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                              </td>
                            </tr>
                            <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                <td colspan="7">
                                    <a href="?page=pemesanan&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Pemesanan

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

