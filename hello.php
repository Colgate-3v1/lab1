<?php
	echo "Hello from PHP";
	class Employee{
		public $id,
			$name,
			$salary,
			$data_startwork;
		function __construct($id,$name,$salary,$data_startwork)
		{
			$this->id=$id;
			$this->name=$name;
			$this->salary=$salary;
			$this->data_startwork=$data_startwork;
		}

	}
	?>