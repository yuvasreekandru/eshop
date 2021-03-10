<?php

Class Login extends Controller
{
   public function index()
   {
      $data['page_title'] = "Login";

      // show($_POST);
      
      if($_SERVER['REQUEST_METHOD'] === "POST")
      {
          
         // show($_POST);
          $User = $this->load_model("User");

          $User->login($_POST);
      }
      
      $this->view("login",$data);
   }
  
}
