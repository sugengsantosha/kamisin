<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard v2</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <section class="content">
      <?= $this->session->flashdata('message'); ?>
      <button class="btn btn-primary mb-3 ml-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus mr-2"></i>Tambah Data Mahasiswa</button>
      <a class="btn btn-danger mb-3 ml-2" href="<?= base_url('mahasiswa/print'); ?>">Print<i class="fas fa-print ml-2"></i></a>
      <a class="btn btn-warning mb-3 ml-2" href="<?= base_url('mahasiswa/pdf'); ?>">Expord PDF<i class="fas fa-file ml-2"></i></a>


      <div class="navbar-form navbar-right">
        <?= form_open('mahasiswa/search') ?>
          <input type="text" name="keyword" class="form-control" placeholder="Search..">
          <button class="btn btn-success" type="submit">Cari</button>
        <?= form_close() ?>
      </div>
      <table class="table">
        <tr>
          <th>NO</th>
          <th>NAMA MAHASISWA</th>
          <th>NIM</th>
          <th>TAGGAL LAHIR</th>
          <th>JURUSAN</th>
          <th colspan="2">AKSI</th>
        </tr>
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) :
          ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['tgl_lahir']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td><?= anchor('mahasiswa/detail/' . $mhs['id'], '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>'); ?></td>
            <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Data')"><?= anchor('mahasiswa/hapus/' . $mhs['id'], '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?></td>
            <td><?= anchor('mahasiswa/edit/' . $mhs['id'], '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- <form method="post" action="<?= base_url() . 'mahasiswa/tambah_aksi'; ?>"> -->

            <?= form_open_multipart('mahasiswa/tambah_aksi'); ?>
            <div class="form-group">
              <label>NAMA</label>
              <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
              <label>NIM</label>
              <input type="number" name="nim" class="form-control">
            </div>
            <div class="form-group">
              <label>TANGGAL LAHIR</label>
              <input type="date" name="tgl_lahir" class="form-control">
            </div>
            <div class="form-group">
              <label for="jurusan">JURUSAN</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Sistem Informatika">Sistem Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Jaringan">Teknik Jaringan</option>
              </select>
            </div>
            <div class="form-group">
              <label>ALAMAT</label>
              <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
              <label>EMAIL</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label>NO. TELEPHONE</label>
              <input type="text" name="no_telp" class="form-control">
            </div>
            <div class="form-group">
              <label>UPLOAD FOTO</label>
              <input type="file" name="foto" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?= form_close(); ?>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>