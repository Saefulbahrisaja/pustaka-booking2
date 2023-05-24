<!-- Begin Page Content -->
<div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Anggota</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->ModelUser->getUserWhere(['role_id'=>1])->num_rows(); ?></div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= base_url('user/anggota'); ?>"<i class="fas fa-users fa-3x text-warning"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Stok buku terdaftar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                      $where=['stok !=0'];
                      $totalstok=$this->ModelBuku->total('stok',$where);
                      
                      echo $totalstok;
                      
                      ?></div>
                    </div>
                    <div class="col-auto"> <a href="<?= base_url('user/anggota'); ?>"<i class="fas fa-book fa-3x text-primary"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Buku Yang dipinjam</div>
                      <div class="row no-gutters align-items-center">
                     
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                          <?php
                          
                          $where=['dipinjam !=0'];
                          $totaldipinjam=$this->ModelBuku->total('dipinjam',$where);

                          echo $totaldipinjam;
                          ?>

                          </div>
                        </div>
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-3x text-success"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Buku Yang diBooking</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php
                          
                          $where=['dibooking !=0'];
                          $totaldibooking=$this->ModelBuku->total('dibooking',$where);

                          echo $totaldibooking;
                          ?></div>
                    </div>
                    <div class="col-auto">
                    <a href="<?= base_url('user'); ?>"><i class="fas fa-shopping-cart fa-3x text-danger"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Divider -->
          <hr class="sidebar-divider">
          <div class="row">
            <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
              <div class="page-header">
                 <span class="fas fa-users text-primary mt-2"> Data User</span> 
                 <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
              </div>
              <div class="table-responsive">
              <table class="table" id="table-datatable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Anggota</th>
                    <th>Email</th>
                    <th>Role ID</th>
                    <th>Aktif</th>
                    <th>member Sejak</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=1;
                  foreach($anggota as $a){ ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $a['nama']; ?></td>
                    <td><?= $a['email']; ?></td>
                    <td><?= $a['role_id']; ?></td>
                    <td><?= $a['is_active']; ?></td>
                    <td><?= date('Y',$a['tanggal_input']); ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            </div>

            <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
              <div class="page-header">
                 <span class="fas fa-users text-primary mt-2"> Data User</span> 
                 <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
              </div>
              <div class="table-responsive">
              <table class="table" id="table-datatable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>penerbit</th>
                    <th>Tahun terbit</th>
                    <th>ISBN</th>
                    <th>Stok</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=1;
                  foreach($buku as $b){ ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $a['judul_buku']; ?></td>
                    <td><?= $a['pengarang']; ?></td>
                    <td><?= $a['penerbit']; ?></td>
                    <td><?= $a['tahun_terbit']; ?></td>
                    <td><?= $a['isbn']; ?></td>
                    <td><?= $a['stok']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>

       

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
