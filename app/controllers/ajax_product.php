<?php

Class Ajax_product extends Controller
{
   public function index()

   {
    //  $data = file_get_contents("php://input");
     $data = (object)$_POST;

     if(is_object($data) && isset($data->data_type))
     {
          $DB = Database::getInstance();
          $product = $this->load_Model('Product');
          $category = $this->load_Model('Category');

          
          if($data->data_type == 'add_product')
          {
            // add new product

            $check = $product->create($data,$_FILES);

            if($_SESSION['error'] != "")
            {

              $arr['message'] = $_SESSION['error'];
              $_SESSION['error'] = "";
              $arr['message_type'] = "error";
              $arr['data'] = "";
              $arr['data_type'] = "add_new";

               
              echo json_encode($arr);

            }else
            {

              $arr['message'] = "Product added successfully!";
              $arr['message_type'] = "info";
              $cats = $product->get_all();
              $arr['data'] = $product->make_table($cats,$category);
              $arr['data_type'] = "add_new";


              echo json_encode($arr);

            }
          }else
          if($data->data_type == 'disable_row')
           {
            
            $disabled =($data->current_state == "Enabled") ? 1 :0 ;
            $id = $data->id;

            $query = "update categories set disabled = '$disabled' where id = '$id' limit 1";
            $DB->write($query);
            $arr['message'] = "";
            $_SESSION['error'] = "";
            $arr['message_type'] = "info";

            $cats = $product->get_all();
            $arr['data'] = $product->make_table($cats);
            
            $arr['data_type'] = "disable_row";

             
            echo json_encode($arr);

           }else
           if($data->data_type == "edit_category")
					 {
              
            $product->edit($data->id,$data->product);
            $arr['message'] = "Your row was successfully edited";
            $_SESSION['error'] = "";
            $arr['message_type'] = "info";

            $cats = $product->get_all();
            $arr['data'] = $product->make_table($cats);

            $arr['data_type'] = "edit_category";

             
            echo json_encode($arr);
            
           }else
          if($data->data_type == 'delete_row')
          {

            $product->delete($data->id);
            $arr['message'] = "Your row was successfully deleted";
            $_SESSION['error'] = "";
            $arr['message_type'] = "info";

            $cats = $product->get_all();
            $arr['data'] = $product->make_table($cats);

            $arr['data_type'] = "delete_row";

             
            echo json_encode($arr);


          }

     
    }

   }

  
  
}
