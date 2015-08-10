<?php

class UploadJson extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('uploadJson_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $this->output->set_content_type('application/json');
            
                $request_body = file_get_contents('php://input');
                $data = json_decode($request_body);
                $id = $data->formid;
              
                $pagesn = '';
                foreach ($data->pages as $page) 
                {
                   $pagesn = $page->pagesn; 
                }
            
                $this->load->model('form');

                $this->form->save_Form($id,$pagesn);
                
                $output = array();
            
                $temp['iddd'] = $id;
                $temp['pagesnnnn'] = $pagesn;
                array_push($output,$temp);
                echo json_encode($output);
        }
}
?>