<!--popup window for adding new record-->
<div class="popup" id="popup-2">
    <div class="overlay"></div>
    <div class="contents">

        <h4><i class="fas fa-user-lock"></i> Login Here</h4>
        <hr>

        <form enctype="multipart/form-data" method="HEAD" action="{{route('login')}}">

            @CSRF

            <input type='text' class="input-field" name="email" id="email" placeholder="username or email" required>
            <input type='password' class="input-field" name="password" id="password" placeholder="password" required>
       
            <button class="btn btn-primary" type='submit'>Login</button>

        </form>
        <button class="btn btnprimary" data-dismiss="modal" onclick="togglePopup2()">Cancel</button>


    </div>

</div>
<script>
    function togglePopup2() {
        document.getElementById(
                "popup-2").classList
            .toggle("active");
    }
</script>