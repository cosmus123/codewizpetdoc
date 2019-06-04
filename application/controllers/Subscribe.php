<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

    public function send_mail() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

      
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('comments', 'Comments', 'required');

        if ($this->form_validation->run() == TRUE)
        {   $name = $this->input->post('name');
            $email = $this->input->post('email');
            $comments = $this->input->post('comments');  
    
           // echo "It's all Good Form validated!";

            $config = Array();
            $config['protocol'] = 'SMTP';
            $config['smtp_crypto'] = 'ssl';
            $config['smtp_host'] = 'mail.productsandservices.eu.com';    
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'cosminmus@productsandservices.eu.com'; // email id
            $config['smtp_pass'] = 'Products123'; // email password
            $config['mailtype'] = 'html';
            $config['wordwrap'] = TRUE;
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n"; //use double quotes here
            $config['crlf'] = "\r\n";

            $this->load->library('email');
            $this->email->initialize($config);

            
            $to_email = 'cosminmus@productsandservices.eu.com';
            $htmlContent = '<h3>You have subscribed ! You have received a mail via SMTP from : </h3>'.$email.'.'.'<br>';
            $htmlContent .= '<p>This email has sent with CodeIgniter 3 application.</p>';
            $htmlContent .= '<br>';
            $htmlContent .= '<p>Comments from </p>'.$name.'are:'.'<br>'.$comments;

            $this->email->from($email);
            $this->email->to($to_email);
            $this->email->subject('Email Test');
            $this->email->message($htmlContent);

            //$this->email->send();           

                    if ($this->email->send()) {

                        $this->load->view('subscribe/subscribe_sucess');
                     } 
                     
        }
        else
        {   
             $this->load->view('subscribe_view');
            
        }

               // $this->output->enable_profiler(TRUE);


    }

}


?>




