<?php
    // system/application/models/form.php

    class Form extends CI_Model {

            function __construct()
            {
                // Call the Model constructor
                parent::__construct();
            }

             function save_Form($formid,$email)  {

                $this->formid   = $formid; 
                $this->email = $email;
                $this->db->insert('ms_form', $this);
              }

    }
?>