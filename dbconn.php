<?php
	class db
	{
		public function connectdb()
		{
			$this->host = "localhost";
			$this->db = "lareng_crud_module";
			$this->user ="LaraAnn";
			$this->password = "";
			
			$this->link = mysql_connect($this->host, $this->user, $this->password);
			
			mysql_select_db($this->db) or die(mysql_error());
			mysql_query("set name utf8;", $this->link);
		}
	}
?>