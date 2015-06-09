<?php
      
	    if (!defined('DB_NAME')) {
           $services = getenv("VCAP_SERVICES");
	
           $services_json = json_decode($services,true);
		
           $mysql_config = $services_json["cleardb"][0]["credentials"];
	
		
           // ** MySQL settings from Bluemix ** //
        	
           define('DB_NAME', $mysql_config["name"]);
           define('DB_USER', $mysql_config["username"]);
           define('DB_PASSWORD', $mysql_config["password"]);
           define('DB_HOST', $mysql_config["hostname"].":".$mysql_config["port"]);
		
		
	   	   $tbl_extra_ticket_data = "CREATE TABLE IF NOT EXISTS extra_ticket_data(
              auid VARCHAR(128) NOT NULL,
			  ticket_id INT NOT NULL,
			  `key` VARCHAR(128) NOT NULL,
			  value TEXT)
			  CHARACTER SET utf8
              COLLATE utf8_general_ci"; 	 
            
		
	       $cleardb = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
		   /*if (!$cleardb->select_db(DB_NAME)) {
              http_response_code(400);
              echo "\ninsert error: " . $cleardb->sqlstate;
              echo "\ninsert error: " . $cleardb>error;
	   	   }
		   else 
			   echo "Successful db select";*/
			
	  	   if (!$cleardb->query($tbl_extra_ticket_data)) {
              http_response_code(400);
              echo "\ninsert error: " . $cleardb->sqlstate;
              echo "\ninsert error: " . $cleardb>error;
		   }
		   //else 
			//   echo "Successful table create";
		
		   $cleardb->close();		
        }		
      
?>
		
