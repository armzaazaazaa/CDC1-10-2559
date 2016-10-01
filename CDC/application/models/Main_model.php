<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	function thehistoryboys2()//ดูประวัตติเด็ก
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$query = $this->db->get();
		return $query->result_array();

	}
	function more_teachers()//
	{
		$this->db->select('*');
		$this->db->from('more_teachers');
		$query = $this->db->get();
		return $query->result_array();

	}
	function studentroom1()//เลือกดูประวัตติเด็กห้อง1
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง1'); 
		$query = $this->db->get();
		return $query->result_array();

	}
	function studentroom2()//เลือกดูประวัตติเด็กห้อง2
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง2'); 
		$query = $this->db->get();
		return $query->result_array();

	}

	function studentroom3()//เลือกดูประวัตติเด็กห้อง3
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง3'); 
		$query = $this->db->get();
		return $query->result_array();

	}
	function studentroom4()//เลือกดูประวัตติเด็กห้อง4
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง4'); 
		$query = $this->db->get();
		return $query->result_array();

	}
	function studentroom5()//เลือกดูประวัตติเด็กห้อง5
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง5'); 
		$query = $this->db->get();
		return $query->result_array();

	}

	function thehistoryboys3()//แก้ไขประวัติเด็ก
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$query = $this->db->get();
		return $query->result_array();
	}
	function editroom($id)//ฟังก์ชั้นแก้ไข
	{
		$this->db->from('thehistoryboys');
		$this->db->where('ID',$id);
		$query = $this->db->get(); 
		return $query->result_array();
	}
	function thehistoryboys3_studentroom1()//เลือกแก้ไขประประวัติเด็กห้อง1
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง1'); 
		$query = $this->db->get();
		return $query->result_array();

	}
	function thehistoryboys3_studentroom2()//เลือกแก้ไขประประวัติเด็กห้อง2
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง2'); 
		$query = $this->db->get();
		return $query->result_array();

	}
	function thehistoryboys3_studentroom3()//เลือกแก้ไขประประวัติเด็กห้อง3
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง3'); 
		$query = $this->db->get();
		return $query->result_array();

	}
	function thehistoryboys3_studentroom4()//เลือกแก้ไขประประวัติเด็กห้อง4
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง4'); 
		$query = $this->db->get();
		return $query->result_array();

	}
	function thehistoryboys3_studentroom5()//เลือกแก้ไขประประวัติเด็กห้อง5
	{
		$this->db->select('*');
		$this->db->from('thehistoryboys');
		$this->db->where('classroom','ห้อง5'); 
		$query = $this->db->get();
		return $query->result_array();

	}
	function hbsoedit()//
	{
		$this->db->select('*');
		$this->db->from('hbso');
		$query = $this->db->get();
		return $query->result_array();
	}
	function editdatahbso($id)//
	{
		$this->db->from('hbso');
		$this->db->where('ID',$id);
		$query = $this->db->get(); 
		return $query->result_array();
	
}
}
