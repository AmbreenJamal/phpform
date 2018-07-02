<!DOCTYPE html>
<html lang="en">
 <head>
  <title>My PHP Form</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
   <script src="my_js_functions.js"></script>
  </head>
<body>
  <div class="container">
    <div class="page-header">
	 <h1>PHP and BOOTSTRAP practice</h1>
	</div>
		 	   		   <div id="error_msg" style="color:red;"></div>
  <div class="panel panel-default">
     <div class="panel-heading">
	 PHP FORM
	 </div>
	 <div class="panel-body">
	   <form  class="form-horizontal" method="post" id="user_form">
	    <div class="form-group">
		 <label for="name" class="col-sm-2">Name:</label>
		 <div class="col-sm-10">
		  <input type="text" class="form-control" id="name" name="name">
		 </div>
		</div>
		<div class="form-group">
		 <label for="email" class="col-sm-2"> E-mail:</label>
		 <div class="col-sm-10">
		  <input type="email" class="form-control" id="email" name="email">
		 </div>
		</div>
		<div class="form-group">
		 <label for="comment" class="col-sm-2">Comments:</label>
		 <div class="col-sm-10">
		 <textarea class="form-control" id="comments" rows="5" name="comments"></textarea>
		 </div>
		</div>
		<div class="form-group">
		 <label for="comment" class="col-sm-2">Gender:</label>
		 <div class="col-sm-10">
		   <label class="radio-inline"><input type="radio" name="optradio">Female</label>
		  <label class="radio-inline"><input type="radio" name="optradio">Male</label>
		 </div>
		</div>
		<div  class="form-group">
		 <div  class="col-sm-2 form-group"></div>
		  <div class="col-sm-10">
		    <input type="submit"  value="Submit" name="Submit" class="btn btn-info btn-lg"/>
		  </div>
		 </div>
	   </form>
	 </div>
  </div>
 </div>  
  <footer class="container-fluid text-center">
  <p>Footer Text</p>
  </footer>
</body>
</html>