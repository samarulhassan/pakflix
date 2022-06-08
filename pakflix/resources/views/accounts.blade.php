<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
	<div class="col-lg-6 m-auto">

		<form class="form-detail" method="post" enctype="multipart/form-data" id="accountform">
			@CSRF
			<br><br><div class="card">

			    <div class="card-header bg-dark">
                     <h1 class="text-white text-centre"> Add Accounts Details </h1>
				</div><br>

                    <label for="full-name">Account No:</label>
                    <input type="number" name="accountno" id="accountno" class="form.control" >
			
			
				<br>
				<!-- <button class="btn btn-success" type="button" id="accountBtn" value="Register" name="register"> Submit </button> -->
				<input type="button" name="submit" class="btn btn-success" id="accountBtn" value="Submit">
				
				<!-- <div class="form-row-last">
                    <input type="button" name="register" class="register" id="registerBtn" value="Register">

                </div> -->

			</div>

		</form>

	</div>
 	  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script type="text/javascript">

   
$("#accountBtn").click(function(e){

        e.preventDefault();
        var url = document.URL;
        var id = url.substring(url.lastIndexOf('/') + 1);
        console.log(id);

        var acc = $("#accountno").val();
        console.log(acc);
        // $(this).html('Save');
        
        $.ajax({
            url:"{{route('account')}}",
            type:"post",
            dataType:"json",
            data:{id:id,acc:acc},
            success:function(data){
              window.location.assign("/")
              
               
            },
            error:function(data){
                alert('Enter unique account number');
            }
            
        });
    });






    </script>
</body>
</html>