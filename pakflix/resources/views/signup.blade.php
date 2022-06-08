<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/signup.css" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        .popup .contents {
            position: absolute;
            border-radius: 7px;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            background: #fff;
            width: 50%;
            max-width: 388px;
            height: 122px;
            z-index: 2;
            /* text-align: center; */
            padding: 20px;
            box-sizing: border-box;
        }

        .popup .overlay {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
            display: none;
        }

        .popup.active .overlay {
            display: block;
        }


        .popup.active .contents {
            transition: all 500ms ease-in-out;
            transform: translate(-50%, -50%) scale(1);
        }

        .cancel {
            position: absolute;
            right: 60px;
            top: 69px;
        }
    </style>
</head>

<body class="form-v2">

    <div class="page-content">


        <h1>PAKFLIX
        </h1>

        <hr>
        
        <div class="form-v2-content">
            
            <div class="form-left">
                <img src="images/form-v2.jpg" alt="form">
                <div class="text-1">
                    <p>Bringing authenticate Pakistani Content on your way<span>try Unlimited</span></p>
                </div>
                <div class="text-2">
                    <p><span>$9.99</span>/ Month</p>
                </div>
            </div>
            <form class="form-detail" enctype="multipart/form-data" method="post" id="myform">
                @CSRF
                <h2>Registration Form</h2>
                <div class="form-row">
                    <label for="full-name">Full Name:</label>
                    <input type="text" name="name" required id="name" class="input-text" value="samar">
                </div>
                <div class="form-row">
                    <label for="your_email">Your Email:</label>
                    <input type="email" name="email" required id="email" class="input-text" value="samar@gmail.com">
                </div>
                <div class="form-row">
                    <label for="phoneno">Phone No:</label>
                    <input type="text"  required name="phoneno" id="phoneno" class="input-text" value="123">
                </div>
                <div class="form-row">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="input-text" 
                    value="123" required>
                </div>

                <div class="form-row">
                    <label for="comfirm-password">Confirm Password:</label>
                    <input type="password" required 
                    name="confirm_password" id="confirm_password" class="input-text" value="123" >
                </div>

                <div class="form-row">
                    <input type="radio" id="free"name="type" value="0">
                    <label for="html">Free</label><br>
                    <input type="radio" id="paid" name="type" value="1">
                   <label for="html">Subscription</label><br>
                    
                </div>

                  
        
                <!-- <div class="form-checkbox">
                    <label class="container">
                        <p>By signing up, you agree to the <a href="#" class="text">Play Term of Service</a></p>
                        <input type="checkbox" name="agree" id="agree">
                        <span class="checkmark"></span>
                    </label>
                </div> -->

                <div class="form-row-last">
                    <input type="button" name="register" 
                    class="register" id="registerBtn" value="Register">

                </div>
            </form>
        </div>

        <!--popup window for adding new record-->
        <div class="popup" id="p">
            <div class="overlay"></div>
            <div class="contents">
                <form action="" method="post" enctype="multipart/form-data">

                    Enter Account number
                    <hr>
                    <input style="margin-top: 14px; margin-left: 31px;" type="number" name="acc" id="acc-no">
                    <button class="btn btn-primary" type='submit'>ok</button>
                </form>
                <button class="btn btn-primary cancel" onclick="togglePopup2()">Cancel</button>


            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


    <script type="text/javascript">
        // jQuery.validator.setDefaults({
        //     debug: true,
        //     success: function (label) {
        //         label.attr('id', 'valid');
        //     },
        // });

        $("#registerBtn").click(function(e){
            // console.log("OK");

        e.preventDefault();

        // $(this).html('Save');
        
        $.ajax({

            data:$("#myform").serialize(),
            url:"{{route('adduser')}}",
            type:"post",
            dataType:"json",
            success:function(data){
                if (data.type=="0"){
                    window.location.assign("/")
                }
                else if (data.type=="1") {
                    window.location.assign("/accounts"+"/"+data.id)
                    //$("#p").modal("show")
                }

               
            }
            
        });
    });


             $("#myform").validate({
            rules: {
                password: "required",
                confirm_password: {
                    equalTo: "#password"
                }
            },
            messages: {
                full_name: {
                    required: "Please provide an username"
                },
                your_email: {
                    required: "Please provide an email"
                },
                password: {
                    required: "Please provide a password"
                },
                confirm_password: {
                    required: "Please provide a password",
                    equalTo: "Wrong Password"
                }
            }
        });

        function show() {
            var x = document.getElementById("ACCOUNT-NO");
            x.style.display = "block";
        }

        function togglePopup2() {
            document.getElementById("popup-2").classList.toggle("active");
        }


    
    </script>

   
</body>

</html>