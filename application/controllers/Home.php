<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        echo "<pre>";
        print_r($this->doctrine->em);
    }
}
//End of file applications/controller/Home.php