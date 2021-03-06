<?php

/*
 * Copyright 2011 by ORCA, Jl. Taman Sulfat 7 No 4, Malang, ID
 * All rights reserved
 * 
 * Written By: herdian ferdianto
 * ferdhie@orca.web.id
 * http://ferdianto.com/
 */

$email = $this->input->get_post('q');
$page_header = '
    <script type="text/javascript">
        STATIC_URL = '.json_encode(base_url('/static')).';
        BASE_URL = '.json_encode(site_url()).';
        EMAIL = '.json_encode($email?$email:'').';
    </script>
    <script type="text/javascript" src="'.base_url('static/models.js').'"></script>
    <script type="text/javascript" src="'.base_url('static/smslogmo.js').'"></script>
';


$page_title = 'Log SMS Masuk';
$this->load->view('header', array('page_title' => $page_title, 'page_header' => $page_header));
?>

                <div id="content">
                    <h1><?php echo $page_title; ?></h1>
                    
                    <?php
                        $msg = flashmsg_get();
                        if ($msg)
                        {
                            echo '<div class="msgbox warning">'.htmlentities($msg).'</div>';
                        }
                    ?>
                    
                    <div id="logmo-grid" style="width:100%; height:100%; margin-top:20px;"></div>

                </div>
		<div id="sidebar">
                    <!-- menu admin -->
                    <?php $this->load->view('dashboard_menu'); ?>
                </div>

                <div class="cl"></div>

<?php $this->load->view('footer');
