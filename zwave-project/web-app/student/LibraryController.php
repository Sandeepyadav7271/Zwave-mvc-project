<?php

Class LibraryController{
	public function addRecord($id,$cust){
		prx($id,false);
		prx($cust,false);
	}

	public function Jump(){
		prx("Jump Function Running");
	}
}


?>