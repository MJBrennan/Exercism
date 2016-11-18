<?php
		
		
	function One()	{
		
	
	   $input = "2011";
	   
	   if(($input % 4)  === 0){
		   echo "This is a leap year";
	   }else{
		   echo "Not a leap year";
	   }
	   
	   }
	   function Two(){
		   
		   $input = 15;
		   
		   if(($input % 5)===0){
			   echo ("Yes");
		   }elseif(($input % 3)===0){
               echo ("no");
		   }elseif(($input % 5)===0  &&   ($input % 3)===0){
			   echo ("YesNo");
		   }else{
			 echo  $input;
		   }
	   }
	   
	   
		function Three():{
			
			$r = array(1,2,3);
			
			$r->array_push(4,5);
			
			echo ($r);
		}
		
		Three();
		
		
		

      

?>