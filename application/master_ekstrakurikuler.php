<?php if ($_GET[act]==''){ ?> 
            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Ekstrakurikuler </h3>
                  <?php if($_SESSION[level]!='kepala'){ ?>
                  <a class='pull-right btn btn-primary btn-sm' href='index.php?view=ekstrakurikuler&act=tambah'>Tambahkan Data</a>
                  <?php } ?>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th>Kode Ekstrakurikuler</th>
                        <th>Nama Ekstrakurikuler</th>
                        <th>Nama Pembina</th>

                        <?php if($_SESSION[level]!='kepala'){ ?>
                        <th style='width:70px'>Action</th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $tampil = mysqli_query($koneksi,"SELECT * FROM ekstrakurikuler ORDER BY kode_ekstrakurikuler DESC");
                    $no = 1;
                    while($r=mysqli_fetch_array($tampil)){
                    echo "<tr><td>$no</td>
                              <td>$r[kode_ekstrakurikuler]</td>
                              <td>$r[nama_ekstrakurikuler]</td>
                              <td>$r[nama_pembina]</td>";
                              if($_SESSION[level]!='kepala'){
                        echo "<td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='?view=ekstrakurikuler&act=edit&id=$r[kode_ekstrakurikuler]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='?view=ekstrakurikuler&hapus=$r[kode_ekstrakurikuler]'><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>";
                              }
                            echo "</tr>";
                      $no++;
                      }

                      if (isset($_GET[hapus])){
                          mysqli_query($koneksi,"DELETE FROM ekstrakurikuler where kode_ekstrakurikuler='$_GET[hapus]'");
                          echo "<script>document.location='index.php?view=ekstrakurikuler';</script>";
                      }

                  ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
<?php 
}elseif($_GET[act]=='edit'){
  if (isset($_POST[update])){
      mysqli_query($koneksi,"UPDATE ekstrakurikuler SET kode_ekstrakurikuler = '$_POST[a]',
                                       nama_ekstrakurikuler = '$_POST[b]',
                                       nama_pembina = '$_POST[c]' where kode_ekstrakurikuler='$_POST[id]'");
    echo "<script>document.location='index.php?view=ekstrakurikuler';</script>";
  }
  $edit = mysqli_query($koneksi,"SELECT * FROM ekstrakurikuler where kode_ekstrakurikuler='$_GET[id]'");
  $s = mysqli_fetch_array($edit);
  echo "<div class='col-md-12'>
            <div class='box box-info'>
              <div class='box-header with-border'>
                <h3 class='box-title'>Edit Data Ekstrakurikuler</h3>
              </div>
            <div class='box-body'>
            <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
              <div class='col-md-12'>
                <table class='table table-condensed table-bordered'>
                <tbody>
                  <input type='hidden' name='id' value='$s[kode_ekstrakurikuler]'>
                  <tr><th width='140px' scope='row'>Kode Ekstrakurikuler</th> <td><input type='text' class='form-control' name='a' value='$s[kode_ekstrakurikuler]'> </td></tr>
                  <tr><th scope='row'>Nama Ekstrakurikuler</th>       <td><input type='text' class='form-control' name='b' value='$s[nama_ekstrakurikuler]'></td></tr>
                  <tr><th scope='row'>Nama Pembina</th>    <td><input type='text' class='form-control' name='c' value='$s[nama_pembina]'></td></tr>";
                echo "</td></tr>
                </tbody>
                </table>
              </div>
            </div>
            <div class='box-footer'>
                  <button type='submit' name='update' class='btn btn-info'>Update</button>
                  <a href='index.php?view=ekstrakurikuler'><button class='btn btn-default pull-right'>Cancel</button></a>
                  
                </div>
            </form>
          </div>";
        }elseif($_GET[act]=='tambah'){
          if (isset($_POST[tambah])){
              mysqli_query($koneksi,"INSERT INTO  ekstrakurikuler VALUES('$_POST[a]','$_POST[b]','$_POST[c]','$_POST[d]','$_POST[e]','$_POST[f]','$_POST[g]','$_POST[h]','$_POST[i]','$_POST[j]')");
              echo "<script>document.location='index.php?view=ekstrakurikuler';</script>";
          }
      
          echo "<div class='col-md-12'>
                    <div class='box box-info'>
                      <div class='box-header with-border'>
                        <h3 class='box-title'>Tambah Data Ekstrakurikuler</h3>
                      </div>
                    <div class='box-body'>
                    <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                      <div class='col-md-12'>
                        <table class='table table-condensed table-bordered'>
                        <tbody>
                          <tr><th width='140px' scope='row'>Kode Ekstrakurikuler</th> <td><input type='text' class='form-control' name='a'> </td></tr>
                          <tr><th scope='row'>Nama Ekstrakurikuler</th>       <td><input type='text' class='form-control' name='b'></td></tr>
                          <tr><th scope='row'>Nama Pembina</th>    <td><input type='text' class='form-control' name='c'></td></tr>
                        </tbody>
                        </table>
                      </div>
                    </div>
                    <div class='box-footer'>
                          <button type='submit' name='tambah' class='btn btn-info'>Tambahkan</button>
                          <a href='index.php?view=ekstrakurikuler'><button class='btn btn-default pull-right'>Cancel</button></a>
                          
                        </div>
                    </form>
                  </div>";
      }
      ?>