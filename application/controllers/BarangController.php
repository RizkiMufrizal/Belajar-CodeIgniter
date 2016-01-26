<?php

/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 26, 2016
 * @Time 10:02:45 AM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 12, column 15 in Templates/Scripting/PHPClass.php.
 * 
 */
class BarangController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang');
        $this->gambarPath = realpath(APPPATH . '../uploads/');
        $this->gambarPathUrl = base_url() . 'upload.';
    }

    public function index() {

        //pagination settings
        $config['base_url'] = site_url('BarangController/index');
        $config['total_rows'] = $this->Barang->getRowBarang();
        $config['per_page'] = "2";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<i class="glyphicon glyphicon-chevron-left"></i>';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '<i class="glyphicon glyphicon-chevron-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();

        $data['barangs'] = $this->Barang->getBarangs($config['per_page'], $data['page'])->result();

        $this->load->view('barang/BarangView', $data);
    }

    public function newBarang() {
        $this->load->view('barang/BarangNew', array('error' => ' '));
    }

    public function saveBarang() {
        $namaFile = $this->uuid->v4();
        $config['upload_path'] = $this->gambarPath;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['file_name'] = $namaFile;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('barang/BarangNew', $error);
        } else {
            $data = array(
                'namaBarang' => $this->input->post('namaBarang'),
                'jenisBarang' => $this->input->post('jenisBarang'),
                'gambar' => $this->upload->file_name,
                'namaBarang' => $this->input->post('namaBarang'),
                'tanggalKadaluarsa' => $this->input->post('tanggalKadaluarsa')
            );
            $this->Barang->saveBarang($data);
            redirect('barang');
        }
    }

    public function editBarang($idBarang) {
        $data['barang'] = $this->Barang->getBarang($idBarang)->result();
        $this->load->view('barang/BarangEdit', $data);
    }

    public function updateBarang() {
        $idBarang = $this->input->post('idBarang');
        $data = array(
            'namaBarang' => $this->input->post('namaBarang'),
            'jenisBarang' => $this->input->post('jenisBarang'),
            'gambar' => $this->input->post('gambar'),
            'tanggalKadaluarsa' => $this->input->post('tanggalKadaluarsa')
        );
        $this->Barang->updateBarang($data, $idBarang);
        redirect('barang');
    }

    public function deleteBarang($idBarang) {
        $this->Barang->deleteBarang($idBarang);
        redirect('barang');
    }

}
