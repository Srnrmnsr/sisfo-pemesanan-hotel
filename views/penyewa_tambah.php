<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Penyewa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_penyewa" class="col-sm-3 control-label">Nama Penyewa</label>
                               <div class="col-sm-9">
                                <input type="text" name="nama_penyewa" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jenkel" class="col-sm-3 control-label">Jenis Kelamin</label>
                             <div class="col-sm-2 col-xs-9">
                                <select name="jenkel" class="form-control">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_ktp" class="col-sm-3 control-label">No KTP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_ktp" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor KTP" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="notelp" class="col-sm-3 control-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="notelp" class="form-control" id="inputEmail3" placeholder="Inputkan Para Pihak yang Terlibat" required>
                            </div>
                        </div>
                    

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Penyewa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penyewa
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
	$alamat      =$_POST['alamat'];
	$jenkel      =$_POST['jenkel'];
	$no_ktp      =$_POST['no_ktp'];
    $notelp      =$_POST['notelp'];
    //buat sql
    $sql="INSERT INTO tbl_penyewa VALUES ('','$nama_penyewa','$alamat','$jenkel','$no_ktp','$notelp')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=penyewa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
