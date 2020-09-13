<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Mytask</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
      <link rel="stylesheet" type="text/css" href="css/site-demos.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <h3> New Register</h3>
            <div class="col-md-6">
               <form class="form-horizontal" id="myform" method="post" enctype="multipart/form-data">
                  
                  <div class="form-group ">
                     <label class="control-label col-sm-2" for="email">Name:</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control required" id="name" placeholder="Enter name" name="name">
                     </div>
                  </div>
                  <div class="form-group ">
                     <label class="control-label col-sm-2" for="email">Email:</label>
                     <div class="col-sm-10">
                        <input type="email" class="form-control  required" id="email" placeholder="Enter email" name="email">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-2" for="phone">DOB:</label>
                     <div class="col-sm-10">          
                        <input type="text" class="form-control required" id="dob" placeholder="Date of Birth" name="dob">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-2" for="phone">Photo:</label>
                     <div class="col-sm-10">
                              <input type="file" class="form-control required" id="photo"  name="photo">

                     </div>
                  </div>
                  <div class="form-group">
                     <label class="control-label col-sm-2" for="phone">Course:</label>
                     <div class="col-sm-10">
                        <select class="form-control required" id="course" name="course">
                           <option value="">Select Course</option>
                           <option value="ECE">ECE</option>
                           <option value="MEC">MEC</option>
                           <option value="CSE">CSE</option>
                           <option value="IT">IT</option>
                           <option value="CIVIL">CIVIL</option>
                        </select>
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="control-label col-sm-2" for="phone">Address:</label>
                     <div class="col-sm-10">
                        <textarea name="address" id="address" class="form-control required" rows="" cols=""></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default" id="addemp">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="js/sweetalert2.min.js"></script>
   <script>
  $( function() {
    $( "#dob" ).datepicker();
  } );
  </script>
   <script type="text/javascript">
      $(document).ready(function(){
          $("#addemp").click( function () {

          $('#myform').valid(); 

          var form = $('#myform')[0];
          var data = new FormData(form); 
      
          var name =$("#empname").val();
          var email =$("#email").val();
          var dob =$("#dob").val();
          var photo = $("#phot").val();
          var course = $("#course").val();
          var address = $("#address").val();
      
          if(name == "" || email =="" ||  dob =="" || photo ==''|| course =="" || address ==""){
                 Swal.fire({
                 type: 'warning',
                 title: 'Please Fill the required Fields',
                 timer:1500,
               })
      
          }else {
         $.ajax({
         url: 'newregister.php',
         type: 'POST',
         data: data,
         contentType: false,
         processData:false,
            success: function (data) {
              alert(data);
            if($.trim(data) == 'Added'){
                    
                     Swal.fire({
                       type: 'success',
                       title: 'New Product Added Successfully',
                       timer:1500,
                     })
                      setTimeout(function(){
                       window.location = "data.php";
                      },1500);
                  
                  }else {
                    
                   Swal.fire({
                       type: 'error',
                       title: 'Not Added',
                       timer:1500,
                     })
         
                  }            
         }
          
       });
      }
      
      });
      
      });
   </script>
</html>