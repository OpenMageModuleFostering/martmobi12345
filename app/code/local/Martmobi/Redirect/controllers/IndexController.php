<?php
 
 	class Martmobi_Redirect_IndexController extends Mage_Core_Controller_Front_Action
 	{

 		public function redirectAction(){
 			$url = 'martmobi.com';
 			header("Location: http://www.martmobi.com");
 			exit();
 		}
 	}