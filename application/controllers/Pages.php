<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{

	}

  public function form(){
    echo "connected to form method";
  }
  public function image(){
    echo "connected to image method";
  }
  public function video(){
    echo "connected to video method";
  }
}
