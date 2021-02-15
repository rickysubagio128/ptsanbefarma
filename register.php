<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleresgister.css">
        <link href= "bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/bx/css/animations.css">
        <link rel="stylesheet" href="bootstrap/bx/css/boxicons.css">
        <link rel="stylesheet" href="bootstrap/bx/css/boxicons.min.css">
        <link rel="stylesheet" href="bootstrap/bx/css/transformations.css">

        <title>Sign Up Sanbe Farma</title>  
    </head>
    <body>
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="img/registerr.svg" alt="" class="form__img">

                <form name ="formregister" action="config/proses_register.php" method="POST" onsubmit="return validateForm()">
                    <div class="form__content">
                    <h1 class="form__title">Register</h1>
                    

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class="bx bx-envelope"></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Username</label>
                            <input type="text" name="username" class="form__input">
                        </div>
                    </div>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class="bx bx-user"></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Email</label>
                            <input type="text" name="email" class="form__input">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class="bx bx-lock" ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" name="password" class="form__input">
                        </div>
                    </div>

                    <input type="submit" class="form__button" value="Sign Up">

                    <div class="form__social">
                        <span class="form__social-text">Our Sign Up with</span>

                        <a href="#" class="form__social-icon"><i class="bx bxl-facebook" ></i></a>
                        <a href="#" class="form__social-icon"><i class="bx bxl-google" ></i></a>
                        <a href="#" class="form__social-icon"><i class="bx bxl-instagram" ></i></a>
                        <a href="#" class="form__social-icon"><i class="bx bxl-linkedin" ></i></a>
                    </div>
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script type="text/javascript" src="bootstrap/js/main.js"></script>
        <script>
            function validateForm() {
                if (document.forms["formregister"]["nama"].value == "") {
                    alert("Nama tidak boleh kosong");
                    document.forms["formregister"]["nama"].focus();
                    return false;
                }
                if (document.forms["formregister"]["email"].value == "") {
                    alert("email tidak boleh kosong");
                    document.forms["formregister"]["email"].focus();
                    return false;
                }
                if (document.forms["formregister"]["username"].value == "") {
                    alert("username tidak boleh kosong");
                    document.forms["formregister"]["username"].focus();
                    return false;
                } 
                if (document.forms["formregister"]["password"].value == "") {
                    alert("password tidak boleh kosong");
                    document.forms["formregister"]["password"].focus();
                    return false;
                }else {
                    alert("Daftar berhasil, Silahkan login");
                }
            }
        </script>
        <!--Footer-->
        <footer>
            <div class="container">
                <small>Copyright@2020 By 18111387_RickySubagio_TIFRP18CIDA</small>
            </div>
        </footer>  
    </body>
</html>