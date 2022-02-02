
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pemesanan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Penyewa</label>
                            <div class="col-sm-3 col-xs-9">
                               <select class="form-control" name="nama_penyewa" required="">
                                    <option value="">-Pilih Nama Pemesan-</option>

                                      <?php 
                                          $sql = $koneksi->Query ("select * from tbl_penyewa");

                                          while ($data = $sql->fetch_assoc()) { ?>
                                              <option><?= $data['nama_penyewa']; ?></option>
                                         <?php }
                                      ?>
                                 </select>
                             </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_keluar" class="col-sm-3 control-label">Tanggal Keluar</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_keluar" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal keluar" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jenis_kamar" onkeyup="isi_otomatis()" class="col-sm-3 control-label">Tipe Kamar</label>
                               <div class="col-sm-3 col-xs-9">
                               <select class="form-control" name="tipe_kamar" id="pilihKamar" required>
                                    <option>-Pilih Tipe Kamar-</option>

                                      <?php 
                                          $sql = $koneksi->Query ("select * from tbl_tipe_kamar");
                                          while ($data = $sql->fetch_assoc()) { ?>

                                          <option 
                                            value="<?= $data['id_kamar']; ?>"
                                            harga="<?= $data['harga']; ?>"><?= $data['tipe_kamar']; ?></option>
                                      <?php } ?>
                                 </select>
                             </div>
                        </div>

                        <div class="form-group">
                            <label for="jlh_kamar" class="col-sm-3 control-label">Jumlah Kamar</label>
                            <div class="col-sm-3">
                                <input type="number" name="jlh_kamar" onkeyup="sum();" class="form-control" id="jlh_kamar" placeholder="Inputkan Jumlah Kamar" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga/Kamar</label>
                            <div class="col-sm-3">
                           <input type="number" name="harga" class="form-control" id="harga" placeholder="..." >
                         </div>
                        </div>

                        <div class="form-group">
                            <label for="total_harga" class="col-sm-3 control-label">Total Harga</label>
                            <div class="col-sm-3">
                                <input type="number" name="total_harga" class="form-control" id="total_harga" placeholder="Inputkan Total Harga" required>
                            </div>
                        </div>
                    

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pemesanan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pemesanan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pemesanan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama_penyewa=$_POST['nama_penyewa'];
    $tgl_masuk   =$_POST['tgl_masuk'];
    $tgl_keluar  =$_POST['tgl_keluar'];
    $jlh_kamar   =$_POST['jlh_kamar'];
    $tipe_kamar  =$_POST['tipe_kamar'];
    $harga =$_POST['harga'];
    $total_harga =$_POST['total_harga'];

    //buat sql
    $sql="INSERT INTO tbl_booking VALUES ('','$nama_penyewa','$tgl_masuk','$tgl_keluar','$jlh_kamar','$tipe_kamar','$harga','$total_harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pemesanan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
