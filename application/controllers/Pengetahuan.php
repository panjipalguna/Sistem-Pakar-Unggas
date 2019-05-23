<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pengetahuan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengetahuan_model');
    } 

    /*
     * Listing of pengetahuan
     */
    function index()
    {
        $data['pengetahuan'] = $this->Pengetahuan_model->get_all_pengetahuan();
        
        $data['_view'] = 'pengetahuan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pengetahuan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'kode_penyakit' => $this->input->post('kode_penyakit'),
				'id_gejala' => $this->input->post('id_gejala'),
				'mb' => $this->input->post('mb'),
				'md' => $this->input->post('md'),
            );
            
            $pengetahuan_id = $this->Pengetahuan_model->add_pengetahuan($params);
            redirect('pengetahuan/index');
        }
        else
        {            
            $data['_view'] = 'pengetahuan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pengetahuan
     */
    function edit($id_pengetahuan)
    {   
        // check if the pengetahuan exists before trying to edit it
        $data['pengetahuan'] = $this->Pengetahuan_model->get_pengetahuan($id_pengetahuan);
        
        if(isset($data['pengetahuan']['id_pengetahuan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'kode_penyakit' => $this->input->post('kode_penyakit'),
					'id_gejala' => $this->input->post('id_gejala'),
					'mb' => $this->input->post('mb'),
					'md' => $this->input->post('md'),
                );

                $this->Pengetahuan_model->update_pengetahuan($id_pengetahuan,$params);            
                redirect('pengetahuan/index');
            }
            else
            {
                $data['_view'] = 'pengetahuan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pengetahuan you are trying to edit does not exist.');
    } 

    /*
     * Deleting pengetahuan
     */
    function remove($id_pengetahuan)
    {
        $pengetahuan = $this->Pengetahuan_model->get_pengetahuan($id_pengetahuan);

        // check if the pengetahuan exists before trying to delete it
        if(isset($pengetahuan['id_pengetahuan']))
        {
            $this->Pengetahuan_model->delete_pengetahuan($id_pengetahuan);
            redirect('pengetahuan/index');
        }
        else
            show_error('The pengetahuan you are trying to delete does not exist.');
    }
    
}
