<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agenda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page']='agenda';

        $qry ='Select * from agenda';
        $arr['agenda'] = $this->db->query($qry)->result_array();

        $this->load->view('admin/vwAgenda',$arr);
    }
    public function edit_Agenda($id='') {
       $arr['page'] = 'agenda';
       if($id!=''){
         $qry ='Select * from agenda where id='.$id ; // select data from db
       $arr['agenda'] = $this->db->query($qry)->result_array();

       $this->load->view('admin/vwEditAgenda',$arr);
       }else{
           redirect('admin/agenda');
       }
   }
   public function hapus_Agenda($id='') {
      $arr['page'] = 'agenda';
      if($id!=''){
        $qry ="DELETE from `agenda` where `id`='$id' ";  // select data from db
      $arr['agenda'] = $this->db->query($qry);
    redirect('admin/agenda');
      }
  }
   public function update_agenda($id='') {
       $id = $_POST['pst_id'];
       $new_content = $_POST['keterangan'];
       $new_agenda = $_POST['n_agenda'];
       $new_tanggal = $_POST['tanggal'];

    if(isset($id) && !empty($id) ){
         $sql = "update agenda set `keterangan`='".$new_content."',`n_agenda`='".$new_agenda."',`tanggal`='".$new_tanggal."' where id=".$id;
         $val = $this->db->query($sql,array($new_content,$new_agenda,$new_tanggal ,$id ));
         redirect('admin/agenda/edit_agenda/'.$id);


    }

    $arr['page'] = 'agenda';
    $this->load->view('admin/vwEditAgenda',$arr);
  }
  public function tambah() {
$this->load->view('admin/vwTambahAgenda');
  }
  public function tambah_agenda() {

      $sql="INSERT INTO `agenda` (`id`,`n_agenda`, `tanggal`, `keterangan`)
VALUES
('null','$_POST[n_agenda]','$_POST[tanggal]','$_POST[keterangan]')";
        $val = $this->db->query($sql);
   $arr['page'] = 'agenda';
   $this->load->view('admin/vwTambahAgenda',$arr);
  }




}
