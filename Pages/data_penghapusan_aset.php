 <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Penghapusan Aset</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Penghapusan Aset</li>
            </ol>
          </div>
          <a href="dashboard.php?p=input_penghapusan_aset" class="btn btn-primary" style="margin-bottom: 3px; "><i class="fa fa-edit"></i> INPUT PENGHAPUSAN ASET</a>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Penghapusan Aset</h6>
                </div>
                <div class="card-body" >
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-bordered" id="dataTableHover" >
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>ID Penghapusan</th>
                        <th>ID Aset</th>
                        <th>Tgl. Penghapusan</th>
                        <th>Status Aset</th>
                        <th>Jml. Aset</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $no=1;
                      $query="SELECT*FROM tbl_penghapusan_aset";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['id_penghapusan'];?></td>
                        <td><?php echo $data['id_aset'];?></td>
                        <td><?php echo $data['tgl_penghapusan'];?></td>
                        <td><?php echo $data['status_aset'];?></td>
                        <td><?php echo $data['jumlah_aset_hapus'];?></td>
                      </tr>
                      <?php $no++;}
                      ?>
                    </tbody> 
                   
                  </table>
                </div>
                </div>
              </div>
            </div>
</div>
</div>
        
