<body>
    <div class="contents">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <h3 class="heading mb-4">Let's talk about everything!</h3>
                        <h5 class="touch">Get in touch with us</h5>
                        <ul>
                            <li class="list"><i class="fas fa-map-marker-alt"> </i> Address:
                                <p style="color: #f9f9f9; font-weight: 450;"> 198 West 21th Street, Suite 721 New York</p>
                            </li>
                            </li>

                            <li class="list"><i class="fas fa-envelope-open"></i> Email:
                                <p style="color: #f9f9f9; font-weight: 450;"> mubinawaheed1@gmail.com</p>
                            </li>


                            <li class="list"><i class="fas fa-phone-square-alt"></i> Phone number:
                                <p style="color: #f9f9f9; font-weight: 450;">+92788675552</p>
                            </li>
                        </ul>

                        <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


                    </div>
                    <div class="col-md-6">

                        <form onsubmit="sendemail(); reset(); return false" enctype="multipart/form-data"
                         class="mb-5" id="contactForm" name="contactForm">
                            @CSRF
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your valuable feedback"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=" https://smtpjs.com/v3/smtp.js">
    </script>
    <script>
        function sendemail() {
            Email.send({
                Host: "smtp.gmail.com",
                Username: "mubina4202439@cloud.neduet.edu.pk",
                Password: "google drive404",
                To: 'mubina4202439@cloud.neduet.edu.pk',
                From: document.getElementById("email").value,
                Subject: "New contact form",
                Body: "Name "+document.getElementById("name").value+
                "<br> Email: "+document.getElementById("email").value+
                "<br> Subject: "+document.getElementById("subject").value+
                "<br> Message: "+document.getElementById("message").value
            }).then(
                message => alert("your email has been sent")
            );
        }
    </script>
</body>