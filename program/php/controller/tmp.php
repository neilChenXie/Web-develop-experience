<?php
class Tmp extends CI_Controller {
	public function normal() {
		/*load header*/
		$cssfile = array('0'=>'');
		$jsfile = array('0'=>'');
		$data['cssfile'] = $cssfile;
		$data['jsfile'] = $jsfile;
		$this->load->view('head', $data);
	}
	public function base_id_show() {
		/*save to session, in case of fresh*/
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$id = $_POST['id'];
			$this->session->set_userdata(array('id'=>$id));
		}
		$id = $this->session->userdata('id');
		/*get info from model*/
		/*load header*/
		$cssfile = array('0'=>'');
		$jsfile = array('0'=>'');
		$data['cssfile'] = $cssfile;
		$data['jsfile'] = $jsfile;
		$this->load->view('head', $data);
		/*load begin of this page*/
		$this->load->view('bodypre');
		/*load page*/
		/*load end of this page*/
		$this->load->view('bodypost');
	}
	public function sub_back() {
		$data['errmsg'] = '';
		if($_SERVER['REQUEST_METHOD']=='POST') {
			/*get and deal input*/
			/*validate and operate*/
			/*redirect based on errmsg*/
		}
		$this->load->view('pagefoo',$data);
	}
}
?>
