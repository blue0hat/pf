<?php
class School extends CI_Controller
{
    public function __construct(){

        parent::__construct();
    }
    public function category(){

    	if ($this->input->method()=='post'){

    		$this->form_validation->set_rules('name','Category Name','required');

    		if($this->form_validation->run()==false){

    			echo "Something Worng Please Try Again";

    		}else{

    			$resp=$this->db->insert('category',$_POST);

    			if($resp){
    				echo "1";
    			}else{
    				echo "Category Not Added";
    			}
    	}

    }else{
    		$data['all_category']=$this->CM->select_data('category','*');
	    	$this->load->view('include/header');
	        $this->load->view('category',$data);
	        $this->load->view('include/footer');
	    }
    }

    function delete_category($id){
    	$this->db->where('id',$id);
    	$this->db->delete('category');
    	sleep(3);
    	redirect(base_url().'school/category');
    }
    function edit_category($id){
    	if($this->input->method()=='post'){
    		$resp=$this->CM->update_data('category',$_POST,array('id'=>$id));
    		if($resp){
    			echo 1;
    		}else{
    			echo 0;
    		}
    	}else{
    	$data['cat_info']=$this->CM->select_data('category','*',array('id'=>$id)); 
	    $this->load->view('include/header');
	    $this->load->view('edit_category',$data);
	    $this->load->view('include/footer');
	}
    }

    function classes(){
        if($this->input->method()=='post'){

            $res=$this->db->insert('classes',$_POST);
            if($res){
                echo 1;
            }else{
                echo 'Module Not added';
            }

        }else{
            $data['classes']=$this->CM->select_data('classes','*'); 
            $data['cats']=$this->CM->select_data('category','*',array('status'=>'1')); 
            $this->load->view('include/header',$data);
            $this->load->view('classes',$data);
            $this->load->view('include/footer');
        }
        
    }

    function delete_class($id){
    $this->db->where('id',$id);
    $this->db->delete('classes');
    redirect(base_url().'school/classes');
}

    function edit_class($id){

        if ($this->input->method()=='post') {
            $res=$this->CM->update_data('classes',$_POST,array('id'=>$id));
            if($res){
                echo 1;
            }else{
                echo 0;
            } 

        }
        else
        {
            $data['classes']=$this->CM->select_data('classes','*',array('id'=>$id));
            $data['cats']=$this->CM->select_data('category','*',array('status'=>'1'));
            $this->load->view('include/header',$data);
            $this->load->view('edit_classes',$data);
            $this->load->view('include/footer');
        }

       
    }




}
?>