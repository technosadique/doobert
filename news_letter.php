<?php 
 $this->load->library('mcapi');				
					$listID = "58b7178803"; 
					$news_email_id = $this->session->userdata('email');
					$retval = $this->mcapi->listSubscribe($listID, $news_email_id, array('EMAIL' => $news_email_id,'FNAME' => $this->session->userdata('user_name'),'LNAME' => $this->session->userdata('last_name')));


?>