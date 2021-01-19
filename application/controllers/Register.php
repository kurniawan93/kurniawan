<?php

class register extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'email wajib diisi']);
        $this->form_validation->set_rules('username', 'username', 'required',  ['required' => 'username wajib diisi']);
        $this->form_validation->set_rules('password1', 'password', 'required|matches[password2]', [
            'required' => 'password wajib diisi', 'matches' => 'password tidak cocok'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('register');
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_user'   => '',
                'email'     => $this->input->post('email'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password1'),
                'role_id'   => 2,
            );
            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}
