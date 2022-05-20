<?php
/*
Plugin Name: perez
Plugin URI: https://perez.ir
Description: this is just plugin to test.
Author: ali perez
Version: 1.0.0
Author URI: http://perez.ir
*/

function admin_notice(){
        $page = $_GET['id'];
        if($page = $_GET['id']){
        switch ($page) {
            case '1':
                $color = 'success';
                break;
            case '2':
                $color = 'info';
                break;
            case '3':
                $color = 'warning';
                break;
            case '4':
                $color = 'error';
                break;
            default:
                # code...
                $color = 'defaultx';
                break;
        }
         echo "<div class='notice notice-$color'>
             <p> سلام به این سایت خوش آمدید.</p>
         </div>";
        }
    }   
add_action('admin_notices', 'admin_notice');