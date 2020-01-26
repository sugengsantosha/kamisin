<div class="content-wrapper">
  <div class="content-header">

    <section class="content">
      <?php foreach ($mahasiswa as $mhs) : ?>
        <form action="<?= base_url() . 'mahasiswa/update'; ?>" method="post">
          <div class="form-group">
            <label for="">Nama Mahasiswa</label>
            <input type="hidden" name="id" class="form-control" value="<?= $mhs['id']; ?>">
            <input type="text" name="nama" class="form-control" value="<?= $mhs['nama']; ?>">
          </div>
          <div class="form-group">
            <label for="">Nim</label>
            <input type="number" name="nim" class="form-control" value="<?= $mhs['nim']; ?>">
          </div>
          <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="text" name="tgl_lahir" class="form-control" value="<?= $mhs['tgl_lahir']; ?>">
          </div>
          <div class="form-group">
            <label for="">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan" value="<?= $mhs['tgl_lahir']; ?>>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Sistem Informatika">Sistem Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Jaringan">Teknik Jaringan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?= $mhs['alamat']; ?>">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $mhs['email']; ?>">
          </div>
          <div class="form-group">
            <label for="">No Telephone</label>
            <input type="text" name="no_telp" class="form-control" value="<?= $mhs['no_telp']; ?>">
          </div>
          
          <button type="reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>


        </form>
      <?php endforeach; ?>
    </section>

  </div>
</div>