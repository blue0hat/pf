<?php 
/**
 * 
 */
class Student extends CI_Controller
{
	
	public	function __construct()
	{
		parent::__construct();
	}
	public function student_registration(){
		if ($this->input->method()=='post') {

			$file_data=$this->file_lib->upload_image('uploads/student_registration/', 'file','PDF|JPG|PNG|JPEG|jpg|png|jpeg|PDF');
			if($file_data){
				$_POST['file']=$file_data['file_name'];
				$res=$this->db->insert('student',$_POST);
				if($res)
					echo '1';
				else
					echo '0';
			}
			
/*
			$data=$this->input->post();
			$data['password']=md5(123456);
			$res=$this->db->insert('student',$data);
			if($res)
				echo "1";
			else
				echo "0";
*/
			}
			else
			{
				$getcat = $this->input->get('getcat');
				$hamzaq = 'category="'.$getcat.'"';
				$data['all_category']=$this->CM->select_data('category','*');
				if ($getcat){
					$data['students']=$this->CM->select_data('student','*',$hamzaq);
				}else{
					$data['students']=$this->CM->select_data('student','*');
				}		
				$data['classes']=$this->CM->select_data('classes','*');
				$this->load->view('include/header',$data);
				$this->load->view('student_registration',$data);
				$this->load->view('include/footer');
			}
			
		}

		public function delete_student($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('student');
			redirect(base_url().'student/student_registration');
		}

		public function edit_student($id){
			if($this->input->method()=='post')
			{
				$count=0;
				if($_FILES['file']['name']!='')
				{
					$file_data=$this->file_lib->upload_image('uploads/student_registration/', 'file','PDF|JPG|PNG|JPEG|jpg|png|jpeg|PDF');
					if($file_data){
						$_POST['file']=$file_data['file_name'];
					}
					else
					{
						$count=1;
					}
				}
				if($count==0){
					$this->db->where('id',$id);
					$res=$this->db->update('student',$_POST);
					if($res)
						echo '1';
					else
						echo '0';
				}
				else
				{
					echo '2';
				}

				/* $this->db->where('id',$id);
				$res=$this->db->update('student',$_POST);
				if ($res) {
					echo '1';
				}
				else
				{
					echo '0';
				} */

			}
			else{
				$data['student_data']=$this->CM->select_data('student','*',array('id'=>$id))[0];
				$data['all_category']=$this->CM->select_data('category','*');
				$data['classes']=$this->CM->select_data('classes','*');
				$this->load->view('include/header',$data);
				$this->load->view('edit_student',$data);
				$this->load->view('include/footer');
			}
			
		}
	}
	?>