<?php 

namespace Common\Model;
use Think\Model;

class StudentModel extends Model{

	public function show_Student(){

		return $this->select();
	}

	public function show_Student_ById($classId){

		return $this->field('sid,sname,sage,ssex,stele')
					->where("Class_id=$classId")
					->select();
	}

	public function addInfo($post){
		return $this->add($post);
	}

	public function countDataByClassId($classId){
		return $this->where(array('Class_id'=>$classId))
					->count();
	}



	public function check_Login($post){
	   
            return $this-> where($post)->find();
       
	}
	public function show_Student_Info_By_Id($Sid){
		return $this->find($Sid);
	}

	public function find_MyClass_ById($studentId){
		return $this->find($studentId)['class_id'];
	}


	public function modify_Student_By_Id($info){
		return $this->save($info);
		
	}
	public function find_Student_By_Id(){
		return $this->find($user_id);
	}

	public function count_Num(){
		return $this->count();
	}

	public function find_Student_By_Like($search,$keywords){
		return $this->where("$search like '%$keywords%'")->select();
	}
	public function count_Student_By_Like($search,$keywords){
		return $this->where("$search like '%$keywords%'")->count();
	}

	public function add_Info($data){
		return $this->add($data);
	}
	
	public function show_ALL_Field(){
		$sql="select column_name from information_schema.columns where table_name='Student' and table_schema = 'experiment' ";
		return $this->query($sql);
	}
	public function show_All_Data(){
		return $this->select();
	}

	public function add_Student($post){

		try{
			return $this->add($post);	
		}catch(\Exception $e){
			return 0;
		}
		
	}

	public function delete_Student_By_Id($student_id){
		return $this->delete($student_id);
	}

}