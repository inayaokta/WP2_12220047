<?php
class Matakuliah extends CI_Controller{
  public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
  public function cetak()
    {
      $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'trim|required|numeric|min_length[3]',
      array('required' => '%s wajib diisi.',
      'numeric' => '%s wajib diisi angka.',
       'min_length' => '%s 3 karakter.', ));
      $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]',
      array('required' => '%s wajib diisi.',
      'min_length' => '%s 3 karakter.',));
      $this->form_validation->set_rules('sks', 'SKS', 'required|mind_length[1]',
      array('required' => '%s wajib diisi.',
      'min_length' => '%s 1 karakter.',));

      
      if ($this->form_validation->run() == FALSE)
      {
              $this->load->view('view-form-matakuliah');
      }
      else
      { 
        $data = [

          'kode' => $this->input->post('kode'),
          'nama' => $this->input->post('nama'),
          'sks' => $this->input->post('sks')
                  ];
  $this->load->view('view-data-matakuliah', $data);
}
}
}