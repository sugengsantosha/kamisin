<?php

class Mahasiswa extends CI_Controller
{
  public function index()
  {
    $data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result_array();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('mahasiswa', $data);
    $this->load->view('templates/footer');
  }

  public function tambah_aksi()
  {
    $nama       = $this->input->post('nama');
    $nim        = $this->input->post('nim');
    $tgl_lahir  = $this->input->post('tgl_lahir');
    $jurusan    = $this->input->post('jurusan');
    $alamat    = $this->input->post('alamat');
    $email    = $this->input->post('email');
    $no_telp    = $this->input->post('no_telp');
    // $foto = $_FILES['foto'];
    // if ($foto = '') { } else {
    //   $config['upload_path']  = './assets/foto';
    //   $config['allowed_types'] = 'jpg|png|gif';

    //   $this->load->library('upload', $config);
    //   if (!$this->upload->do_upload('foto')) {
    //     echo "Upload Gagal";
    //     die();
    //   } else {
    //     $foto = $this->upload->data('file_name');
    //   }
    // }

    $data = array(
      'nama'        => $nama,
      'nim'         => $nim,
      'tgl_lahir'   => $tgl_lahir,
      'jurusan'     => $jurusan,
      'alamat'     => $alamat,
      'email'     => $email,
      'no_telp'     => $no_telp
      // 'foto'      => $foto
    );

    $this->M_mahasiswa->input_data($data, 'tb_mahasiswa');
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Berhasil Ditambahkan</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('mahasiswa/index');
  }
  
  public function hapus($id)
  {
    $where = array('id' => $id);
    $this->M_mahasiswa->hapus_data($where, 'tb_mahasiswa');
    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Berhasil Dihapus</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('mahasiswa/index');
  }
  
  public function edit($id)
  {
    $where = array('id' => $id);
    $data['mahasiswa'] = $this->M_mahasiswa->edit_data($where, 'tb_mahasiswa')->result_array();
    
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('edit', $data);
    $this->load->view('templates/footer');
  }
  
  public function update()
  {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $nim = $this->input->post('nim');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $jurusan = $this->input->post('jurusan');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $no_telp = $this->input->post('no_telp');
    
    $data = array(
      'nama'        => $nama,
      'nim'         => $nim,
      'tgl_lahir'   => $tgl_lahir,
      'jurusan'     => $jurusan,
      'alamat'      => $alamat,
      'email'       => $email,
      'no_telp'     => $no_telp
    );
    
    $where = array(
      'id' => $id
    );
    
    $this->M_mahasiswa->update_data($where, $data, 'tb_mahasiswa');
    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Data Berhasil Diupdate</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('mahasiswa/index');
  }
  
  public function detail($id)
  {
    $this->load->model('M_mahasiswa');
    $detail = $this->M_mahasiswa->detail_data($id);
    $data['detail'] = $detail;

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('detail', $data);
    $this->load->view('templates/footer');
  }

  public function print()
  {
    $data['mahasiswa'] = $this->M_mahasiswa->tampil_data("tb_mahasiswa")->result_array();
    $this->load->view('print_mahasiswa', $data);
  }

  public function pdf()
  {
    $this->load->library('dompdf_gen');

    $data['mahasiswa'] = $this->M_mahasiswa->tampil_data("tb_mahasiswa")->result_array();
    $this->load->view('laporan_pdf', $data);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->setpaper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_mahasiswa.pdf", array('Attachment' => 0));
  }

  public function search()
  {
    $keyword = $this->input->post('keyword');
    $data['mahasiswa'] = $this->M_mahasiswa->get_keyword($keyword);

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('mahasiswa', $data);
    $this->load->view('templates/footer');
  }
}
