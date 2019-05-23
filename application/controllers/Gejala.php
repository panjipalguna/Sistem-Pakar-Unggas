<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Gejala extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Gejala_model');
    } 

    /*
     * Listing of gejala
     */
    function index()
    {
        $data['gejala'] = $this->Gejala_model->get_all_gejala();
        
        $data['_view'] = 'gejala/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new gejala
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nama_gejala' => $this->input->post('nama_gejala'),
            );
            
            $gejala_id = $this->Gejala_model->add_gejala($params);
            redirect('gejala/index');
        }
        else
        {            
            $data['_view'] = 'gejala/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a gejala
     */
    function edit($id_gejala)
    {   
        // check if the gejala exists before trying to edit it
        $data['gejala'] = $this->Gejala_model->get_gejala($id_gejala);
        
        if(isset($data['gejala']['id_gejala']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nama_gejala' => $this->input->post('nama_gejala'),
                );

                $this->Gejala_model->update_gejala($id_gejala,$params);            
                redirect('gejala/index');
            }
            else
            {
                $data['_view'] = 'gejala/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The gejala you are trying to edit does not exist.');
    } 

    /*
     * Deleting gejala
     */
    function remove($id_gejala)
    {
        $gejala = $this->Gejala_model->get_gejala($id_gejala);

        // check if the gejala exists before trying to delete it
        if(isset($gejala['id_gejala']))
        {
            $this->Gejala_model->delete_gejala($id_gejala);
            redirect('gejala/index');
        }
        else
            show_error('The gejala you are trying to delete does not exist.');
    }
    
}