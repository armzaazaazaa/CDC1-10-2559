<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }

    public function index()
    {

        // $['data']=$this->Main_model->test();
        $this->load->view('login');
    }

    function welcome_message()//หน้าแรก
    {

        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('welcome_message');
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }
    function Profile()//หน้าแสดงโปรไฟล์
    {

        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('Profile');
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function editPofile()//หน้าแสดงโปรไฟล์
    {

        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('editPofile');
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function project_information()//ข้อมูลโครงการ
    {

        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('project_information');
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }
    function About_the_web()//เกียวกับเว็บไช
    {

        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('About_the_web');
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function more_teachers()//ข้อมูลครูพี่เลี่ยง
    {
        $data['more_teachers'] = $this->Main_model->more_teachers();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('more_teachers', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }


    function thehistoryboys1()//กรอกประวัตติเด็ก
    {

        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('thehistoryboys1');
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function thehistoryboys2()//ดูประวัตติเด็ก
    {
        $data['thehistoryboys2'] = $this->Main_model->thehistoryboys2();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('thehistoryboys2', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function thehistoryboys3()//แก้ไขประวัติเด็ก
    {
        $data['thehistoryboys3'] = $this->Main_model->thehistoryboys3();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('thehistoryboys3', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }


    function studentroom1()//เลือกดูประวัตติเด็กห้อง1
    {
        $data['studentroom1'] = $this->Main_model->studentroom1();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('studentroom1', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function studentroom2()//เลือกดูประวัตติเด็กห้อง2
    {
        $data['studentroom2'] = $this->Main_model->studentroom2();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('studentroom2', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function studentroom3()//เลือกดูประวัตติเด็กห้อง3
    {
        $data['studentroom3'] = $this->Main_model->studentroom3();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('studentroom3', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function studentroom4()//เลือกดูประวัตติเด็กห้อง4
    {
        $data['studentroom4'] = $this->Main_model->studentroom4();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('studentroom4', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function studentroom5()//เลือกดูประวัตติเด็กห้อง5
    {
        $data['studentroom5'] = $this->Main_model->studentroom5();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('studentroom5', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    public function delstudent($id)
    {
        // if($this->session->userdata('logged')==1){
        $this->db->where('id', $id);
        $this->db->delete('thehistoryboys');
        redirect('main/thehistoryboys3');
        // }
    }

    function editroom($id)
    {
        // if($this->session->userdata('developer')==1){
        // $data['room']=$this->Admin_model->where_room($id);
        $data['editroom'] = $this->Main_model->editroom($id);
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('editroom', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');

        // }
    }

    function thehistoryboys3_studentroom1()//เลือกแก้ไขประประวัติเด็กห้อง1
    {
        $data['thehistoryboys3_studentroom1'] = $this->Main_model->thehistoryboys3_studentroom1();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('thehistoryboys3_studentroom1', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function thehistoryboys3_studentroom2()//เลือกแก้ไขประประวัติเด็กห้อง2
    {
        $data['thehistoryboys3_studentroom2'] = $this->Main_model->thehistoryboys3_studentroom2();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('thehistoryboys3_studentroom2', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function thehistoryboys3_studentroom3()//เลือกแก้ไขประประวัติเด็กห้อง3
    {
        $data['thehistoryboys3_studentroom3'] = $this->Main_model->thehistoryboys3_studentroom3();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('thehistoryboys3_studentroom3', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function thehistoryboys3_studentroom4()//เลือกแก้ไขประประวัติเด็กห้อง4
    {
        $data['thehistoryboys3_studentroom4'] = $this->Main_model->thehistoryboys3_studentroom4();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('thehistoryboys3_studentroom4', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function thehistoryboys3_studentroom5()//เลือกแก้ไขประประวัติเด็กห้อง5
    {
        $data['thehistoryboys3_studentroom5'] = $this->Main_model->thehistoryboys3_studentroom5();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('thehistoryboys3_studentroom5', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    public function insertdepa()//insertประวัติเด็ก
    {
        {
            $data = array(

                'student_id' => $this->input->post('student_id'),
                'id_card' => $this->input->post('id_card'),
                'name' => $this->input->post('name'),
                'last_names' => $this->input->post('last_names'),
                'birthday' => $this->input->post('birthday'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
                'congenital_disease' => $this->input->post('congenital_disease'),
                'parents_name' => $this->input->post('parents_name'),
                'address' => $this->input->post('address'),
                'career' => $this->input->post('career'),
                'telephone' => $this->input->post('telephone'),
                'classroom' => $this->input->post('classroom'),
                'age' => $this->input->post('age'),
                'image' => $this->input->post('image'),

            );
            $this->db->insert('thehistoryboys', $data);
            redirect('main/thehistoryboys1');
        }
    }

    public function edit($id)//แก้ไขประวัติเด็ก
    {
        $data = array(
            'student_id' => $this->input->post('student_id'),
            'id_card' => $this->input->post('id_card'),
            'name' => $this->input->post('name'),
            'last_names' => $this->input->post('last_names'),
            'birthday' => $this->input->post('birthday'),
            'weight' => $this->input->post('weight'),
            'height' => $this->input->post('height'),
            'congenital_disease' => $this->input->post('congenital_disease'),
            'parents_name' => $this->input->post('parents_name'),
            'address' => $this->input->post('address'),
            'career' => $this->input->post('career'),
            'telephone' => $this->input->post('telephone'),
            'classroom' => $this->input->post('classroom'),

        );
        $this->db->where('id', $id);
        $this->db->update('thehistoryboys', $data);
        redirect('main/thehistoryboys3');
    }

    function hbso()
    {

        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('hbso');
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function hbsoedit()
    {
        $data['hbsoedit'] = $this->Main_model->hbsoedit();

        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('hbsoedit', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    function edithbso()
    {
        $data['edithbso'] = $this->Main_model->edithbso($id);
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('edithbso', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }

    public function inserthbso()
    {


        {

            $data = array(

                'order_type' => $this->input->post('order_type'),
                'order_date' => $this->input->post('order_date'),
                'order_amount' => $this->input->post('order_amount'),


            );
            $this->db->insert('hbso', $data);
            redirect('main/me');
        }
    }

    public function editdatahbso($id)
    {
        $data = array(
            'order_type' => $this->input->post('order_type'),
            'order_date' => $this->input->post('order_date'),
            'order_amount' => $this->input->post('order_amount'),


        );
        $this->db->where('id', $id);
        $this->db->update('hbso', $data);
        redirect('main/hbso');
    }

    public function del($id)
    {
        // if($this->session->userdata('logged')==1){
        $this->db->where('id', $id);
        $this->db->delete('hbso');
        redirect('main/hbsoedit');
        // }
    }

    function hbso_hichat()
    {
        $data['hbso'] = $this->Main_model->dataream();
        $data['hbso'] = $this->Main_model->countstate();
        // $data['hbso_hichat'] = $this->Main_model->hbso_hichat();
        $this->load->view('includes/topbar');
        $this->load->view('includes/hearder');
        $this->load->view('includes/menu');
        $this->load->view('hbso_hichat', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/javascript');
    }
}

