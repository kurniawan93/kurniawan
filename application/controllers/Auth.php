<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'email wajib disisi']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password wajib disisi']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('form_login');
            $this->load->view('template/footer');
        } else {
            $auth = $this->model_auth->cek_login();

            if ($auth == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              email atau password salah !!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('email', $auth->email);
                $this->session->set_userdata('role_id', $auth->role_id);
                switch ($auth->role_id) {
                    case 1:
                        redirect('admin/dashboard_admin');
                        break;
                    case 2:
                        redirect('dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
