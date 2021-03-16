<?php

Class Ajax extends Controller
{
   public function index()

   {
     $data = file_get_contents("php://input");

     print_r(json_decode($data));

     if(is_object($data))
     {
          if($data->data_type == 'add_category')
          {
            // add new category

            $category = loadModel('Category');
            $check = $category->create($data);

            if($_SESSION['error'] != "")
            {

              $arr['message'] = $_SESSION['error'];
              $arr['message_type'] = "error";
              $arr['data'] = "";

              echo json_encode($arr);

            }
          }
     }
   }
  
}
