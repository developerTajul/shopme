<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){
		$data = array();
		$data['header'] = $this->load->view('frontEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('frontEnd/tp-parts/footer', '', true);
		// $data['slider'] = $this->load->view('frontEnd/tp-parts/pagetwo/slider', '', true);
		// $data['infoblocks'] = $this->load->view('frontEnd/tp-parts/pagetwo/infoblocks', '', true);
		// $data['today_deal'] = $this->load->view('frontEnd/tp-parts/pagetwo/today_deal', '', true);
		
		/**
		*	all products
		*/	
		$data['all_products'] = $this->Product_Model->select_all_product_info();
		$data['new_arrivals'] = $this->load->view('frontEnd/tp-parts/pagetwo/new_arrivals', $data, true);
		// $data['featured_products'] = $this->load->view('frontEnd/tp-parts/pagetwo/featured_products', '', true);
		// $data['banner'] = $this->load->view('frontEnd/tp-parts/pagetwo/banner', '', true);
		// $data['best_seller'] = $this->load->view('frontEnd/tp-parts/pagetwo/best_seller', '', true);
		

		$this->load->view('frontEnd/home', $data);
	}


	public function product_details($p_id){
		$data = array();
		$data['header'] = $this->load->view('frontEnd/tp-parts/header', '', true);	
		$data['footer'] = $this->load->view('frontEnd/tp-parts/footer', '', true);	
		$data['product_info'] = $this->Product_Model->select_product_by_id($p_id);	
		

		$this->load->view('frontEnd/tp-parts/pages/single-product', $data);

	}



}
