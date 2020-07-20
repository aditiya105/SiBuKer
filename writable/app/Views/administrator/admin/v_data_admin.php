<?php
  include(APPPATH.'views/administrator/header.php');
?> 
<?php
  include(APPPATH.'views/administrator/sidebar.php');
?> 
<div class="main-panel">
  <div class="content-wrapper">
  <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Data Admin</h4>
        </div>
      </div>
    </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="<?php echo base_url('admin/c_admin/tambah_admin') ?>" class="btn btn-md btn-primary btn-tambah"><i class="fa fa-plus"></i>Tambah Admin</a>
            <?php if ($this->session->flashdata('flash')) { ?>
              <div class="alert alert-success alert-dismissible fade show float-right" role="alert">
                Data admin <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>
            <table class="table table-bordered table-striped" id="table1" style="margin-top: 20px;text-align: center;">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Nama </th>
                  <th> Username </th>
                  <th> Telepon </th>
                  <th> Email </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                    $no = 0; 
                    foreach ($data as $admin) :
                    $no++
                  ?>
                  <td><?php echo $no ?></td>
                  <td><?php echo $admin['nama'] ?></td>
                  <td><?php echo $admin['username'] ?></td>
                  <td><?php echo $admin['telepon'] ?></td>
                  <td><?php echo $admin['email'] ?></td>
                  <td>
                    <a href="<?php echo base_url('admin/c_admin/edit_admin/') ?><?php echo $admin['id_admin']; ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('admin/c_admin/hapus_admin/') ?><?php echo $admin['id_admin']; ?>" class="btn btn-xs btn-danger" onclick = "return confirm('Yakin ingin menghapus data?')"><i class="fa fa-eraser"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  include(APPPATH.'views/administrator/footer.php')
?>