<?php $this->view("admin/header",$data); ?>

<?php $this->view("admin/sidebar",$data); ?>

<style type="text/css">

         .add_new,
		 .edit_product{
             
			 width:500px;
			 height:550px;
			 background-color:#eae8e8;
			 box-shadow:0px 0px 10px #aaa;
			 position:absolute;
			 padding:6px;
         }

		 .show{
			 display:block;
		 }
		 .hide{
			 display:none;
		 }

</style>

<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Products <button class="btn btn-primary btn-xs" onclick="show_add_new(event)"><i class="fa fa-plus"></i> Add New </button></h4>
						
								  <!-- add new product -->
                                  <div class="add_new hide">
                                        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Add New Product</h4>
                                              <form class="form-horizontal style-form" method="post">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Product Name:</label>
                                                   <div class="col-sm-10">
                                                       <input id="description" name="description" type="text" class="form-control" autofocus required>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Quantity:</label>
                                                   <div class="col-sm-10">
                                                       <input id="quantity" name="quantity" type="number" value="1" class="form-control"  required>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Category:</label>
                                                   <div class="col-sm-10">
                                                   <select id="category" name="category" class="form-control" required>
                                                   <option value=""></option>

                                                   <?php if(is_array($categories)):  ?>
                                                         <?php foreach($categories as $categ):  ?>

                                                            <option value="<?= $categ->id ?>"><?= $categ->category ?></option>

                                                        <?php endforeach; ?>
                                                   <?php endif; ?>

                                                   </select>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Price:</label>
                                                   <div class="col-sm-10">
                                                       <input id="price" name="price" type="number" placeholder="0.00" step=".01" class="form-control" required>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Image:</label>
                                                   <div class="col-sm-10">
                                                       <input id="image" name="image" type="file" class="form-control" required>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Image2<br>(optional):</label>
                                                   <div class="col-sm-10">
                                                       <input id="image2" name="image2" type="file" class="form-control" >
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Image3<br>(optional):</label>
                                                   <div class="col-sm-10">
                                                       <input id="image3" name="image3" type="file" class="form-control" >
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Image4<br>(optional):</label>
                                                   <div class="col-sm-10">
                                                       <input id="image4" name="image4" type="file" class="form-control" >
                                                   </div>
                                               </div>
											   <button type="button" class="btn btn-warning " onclick="show_add_new(event)" style="position:absolute;bottom:10px;left:10px;">Cancel</button>
											   <button type="button" class="btn btn-primary " onclick="collect_data(event)" style="position:absolute;bottom:10px;right:10px;">Save</button>

                                            </form>
											<br>
          	
								  </div>
								  <!-- add new product end-->
								  
								  <!-- edit product -->
                                  <div class="edit_product hide">
                                        	  <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Product</h4>
                                              <form class="form-horizontal style-form" method="post">
											  <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Product Name:</label>
                                                   <div class="col-sm-10">
                                                       <input id="edit_description" name="description" type="text" class="form-control" autofocus required>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Quantity:</label>
                                                   <div class="col-sm-10">
                                                       <input id="edit_quantity" name="quantity" type="number" value="1" class="form-control"  required>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Category:</label>
                                                   <div class="col-sm-10">
                                                   <select id="edit_category" name="category" class="form-control" required>
                                                   <option value=""></option>

                                                   <?php if(is_array($categories)):  ?>
                                                         <?php foreach($categories as $categ):  ?>

                                                            <option value="<?= $categ->id ?>"><?= $categ->category ?></option>

                                                        <?php endforeach; ?>
                                                   <?php endif; ?>

                                                   </select>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Price:</label>
                                                   <div class="col-sm-10">
                                                       <input id="edit_price" name="price" type="number" placeholder="0.00" step=".01" class="form-control" required>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Image:</label>
                                                   <div class="col-sm-10">
                                                       <input id="edit_image" name="image" type="file" class="form-control" required>
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Image2<br>(optional):</label>
                                                   <div class="col-sm-10">
                                                       <input id="edit_image2" name="image2" type="file" class="form-control" >
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Image3<br>(optional):</label>
                                                   <div class="col-sm-10">
                                                       <input id="edit_image3" name="image3" type="file" class="form-control" >
                                                   </div>
                                               </div>

                                               <br><br style="clear:both;">
                                               <div class="form-group">
                                                   <label class="col-sm-2 col-sm-2 control-label">Image4<br>(optional):</label>
                                                   <div class="col-sm-10">
                                                       <input id="edit_image4" name="image4" type="file" class="form-control" >
                                                   </div>
                                               </div>
											   <button type="button" class="btn btn-warning " onclick="show_edit_product(0,'',event)" style="position:absolute;bottom:10px;left:10px;">Cancel</button>
											   <button type="button" class="btn btn-primary " onclick="collect_edit_data(event)" style="position:absolute;bottom:10px;right:10px;">Save</button>

                                            </form>
											<br>
          	
								  </div>
								  <!-- edit product end-->
	                  	  	  <hr>
                              <thead>
                              <tr>
							      <th> Product Id</th>
                                  <th> Product Name</th>
                                  <th> Quantity</th>
                                  <th> Category</th>
								  <th> Price</th>
                                  <th> Date</th>
								  <th><i class=" fa fa-edit"></i> Action</th>
                              </tr>
                              </thead>
                              <tbody id="table_body">

									<?= $tbl_rows ?>
                             
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->          	

<script type="text/javascript">

     var EDIT_ID = 0;
     function show_add_new(){

          const show_edit_box = document.querySelector(".add_new");
		  const product_input = document.querySelector("#description");

		  if(show_edit_box.classList.contains("hide")){

			show_edit_box.classList.remove("hide");
			product_input.focus();

		  }else{

			show_edit_box .classList.add("hide");
			product_input.value = "";
		  }
	
        }
		
     function show_edit_product(id,product,e)
	 {

          EDIT_ID = id;
          const show_add_box = document.querySelector(".edit_product");
		//   show_add_box.style.left = (e.clientX - 800)+ "px";
		  show_add_box.style.top = (e.clientY - 100)+ "px";

		  const edit_description_input = document.querySelector("#edit_description");
		  edit_description_input.value = product;

		  if(show_add_box.classList.contains("hide")){

			show_add_box.classList.remove("hide");

			edit_description_input.focus();

		  }else{

			show_add_box.classList.add("hide");
			edit_description_input.value = "";
		  }

        }

		function collect_data(e){
             
			var product_input = document.querySelector("#description");
			if(product_input.value.trim() == "" || !isNaN(product_input.value.trim()))
			{

				alert("Please enter a valid product name");
                return;
			}

            var quantity_input = document.querySelector("#quantity");
			if(quantity_input.value.trim() == "" || isNaN(quantity_input.value.trim()))
			{

				alert("Please enter a valid quantity");
                return;
			}

            var category_input = document.querySelector("#category");
			if(category_input.value.trim() == "" || isNaN(category_input.value.trim()))
			{

				alert("Please enter a valid category");
                return;
			}

            var price_input = document.querySelector("#price");
			if(price_input.value.trim() == "" || isNaN(price_input.value.trim()))
			{

				alert("Please enter a valid price");
                return;
			}

			var image_input = document.querySelector("#image");
			if(image_input.files.length == 0)
			{

				alert("Please enter a valid main image");
                return;
			}

        //    create a form
            var data = new FormData();
			var image2_input = document.querySelector("#image2");
			if(image2_input.files.length > 0)
			{
				data.append('image2',image2_input.files[0]);

			}

			var image3_input = document.querySelector("#image3");
			if(image3_input.files.length > 0)
			{
				data.append('image3',image3_input.files[0]);

			}

			var image4_input = document.querySelector("#image4");
			if(image4_input.files.length > 0)
			{
				data.append('image4',image4_input.files[0]);

			}
			data.append('description',product_input.value.trim());
			data.append('quantity',quantity_input.value.trim());
			data.append('category',category_input.value.trim());
			data.append('price',price_input.value.trim());
			data.append('data_type','add_product');
			data.append('image',image_input.files[0]);
            
            send_data_files(data);

		}

		function collect_edit_data(e)
		{
             
			 var product_input = document.querySelector("#product_edit");
 
			 if(product_input.value.trim() == "" || !isNaN(product_input.value.trim()))
			 {
 
				 alert("Please enter a valid product name");
			 }
			 
			 var data = product_input.value.trim();
 
			 send_data({
		            		id:EDIT_ID,
							product:data,
							data_type:'edit_product'
					   });
 
		 }

		function send_data(data = {})
		{
      
			var ajax = new XMLHttpRequest();
            

            ajax.addEventListener('readystatechange', function(){

				if(ajax.readyState == 4 && ajax.status == 200)
				{
					handle_result(ajax.responseText);
				}
			});

			
			ajax.open("POST","<?= ROOT ?>ajax_product",true);
			ajax.send(JSON.stringify(data));
			
		}

		
		function send_data_files(formdata)
		{
      
			var ajax = new XMLHttpRequest();
            

            ajax.addEventListener('readystatechange', function(){

				if(ajax.readyState == 4 && ajax.status == 200)
				{
					handle_result(ajax.responseText);
				}
			});

			
			ajax.open("POST","<?= ROOT ?>ajax_product",true);
			ajax.send(formdata);
			
		}
        
		function handle_result(result)
		{
			console.log(result);
			if(result != "")
			{

		    	var obj = JSON.parse (result);

			  if(typeof obj.data_type != 'undefined')
			  {

				if(obj.data_type == "add_new")
				{
                      if(obj.message_type == "info")
				      {
				     	alert(obj.message);
		                 show_add_new();
     
				     	var table_body = document.querySelector("#table_body");

				     	table_body.innerHTML = obj.data;
			     	 }else
				     {
			     		 alert(obj.message);
			     	 }
			     	}else
					 if(obj.data_type == "edit_product")
					 {

		                 show_edit_product(0,'',false);
     
				     	var table_body = document.querySelector("#table_body");

				     	table_body.innerHTML = obj.data;
						// alert(obj.message);
					 }else
					 if(obj.data_type == "disable_row")

					 {

                        var table_body = document.querySelector("#table_body");
				     	table_body.innerHTML = obj.data;

					 }else
					 if(obj.data_type == "delete_row")

					 {
						var table_body = document.querySelector("#table_body");
                        table_body.innerHTML = obj.data;

						 alert(obj.message);
					 }
              }
			}

		}

		function edit_row(id)
		{
			send_data({

				data_type: ""
			});
 		}
		 function delete_row(id)
		{
			if(!confirm("Are you sure you want to delete this row?"))
			{
				return;
			}
			send_data({

				data_type: "delete_row",
				id:id
			});
 		}
		 function disable_row(id,state)
		{
			
			send_data({

				data_type: "disable_row",
				id:id,
				current_state:state
			});
 		}

</script>			  

<?php $this->view("admin/footer",$data); ?>
