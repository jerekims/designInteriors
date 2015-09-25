<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(1);
class Home extends MY_Controller {


     /* class constructor
    ____________________________________________________________*/

  function __construct()
    {
        parent::__construct();
          
    }

    /* index function
    ____________________________________________________________*/

    function Index()
    {
         $data[]='';
        $data['top_navbar']='home/v_navbar';
        $data['content_page']='home/v_home';
        $data['main_footer']='home/v_footer';
        // echo "<pre>";print_r($data);die();
        $this->template->call_home_template($data);

    }

    /*about us function
    ____________________________________________________________*/
    function About()
    {
        $data[]='';
        $data['top_navbar']='home/v_navbar';
        $data['content_page']='home/v_about';
        $data['main_footer']='home/v_footer';
        // echo "<pre>";print_r($data);die();
        $this->template->call_home_template($data);

    }

    /*services function
    _________________________________________________________________*/
    function Services()
    {
       $data[]='';
      $data['top_navbar']='home/v_navbar';
      $data['content_page']='home/v_service';
      $data['main_footer']='home/v_footer';
      // echo "<pre>";print_r($data);die();
      $this->template->call_home_template($data);
    }
    
    /* portfolio function
    __________________________________________________________________*/
    function Portfolio()
    {
      $data[]='';
      $data['top_navbar']='home/v_navbar';
      $data['content_page']='home/v_portfolio';
      $data['main_footer']='home/v_footer';
      // echo "<pre>";print_r($data);die();
      $this->template->call_home_template($data);
    }

    /* scope function
    _________________________________________________________________*/
  function Scope()
  {
      $data[]='';
      $data['top_navbar']='home/v_navbar';
      $data['content_page']='home/v_scope';
      $data['main_footer']='home/v_footer';
      // echo "<pre>";print_r($data);die();
      $this->template->call_home_template($data);
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */