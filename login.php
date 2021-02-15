<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bx/css/animations.css">
        <link rel="stylesheet" href="bootstrap/bx/css/boxicons.css">
        <link rel="stylesheet" href="bootstrap/bx/css/boxicons.min.css">
        <link rel="stylesheet" href="bootstrap/bx/css/transformations.css">

        <title>Login Sanbe Farma</title>  
    </head>
    <style>
        footer {
		padding: 30px 0;
		background-color: rgb(0, 0, 0);
		color: white;
		text-align: center;
	}
    </style>
    <body>
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="img/logiin.svg" alt="" class="form__img">

                <form name="formLogin" action="config/proses_login.php" method="POST" onsubmit="return validateForm()">
                    <div class="form__content">
                    <h1 class="form__title">Welcome</h1>
                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Username</label>
                            <input type="text" name="username" class="form__input">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" name="password" class="form__input">
                        </div>
                    </div>
                    <a href="#" class="form__forgot">Forgot Password?</a>

                    <input type="submit" name="login" class="form__button" value="Login">
                    <a href="register.php" class="form__forgot">Don't Have An Account?</a>

                    <div class="form__social">
                        <span class="form__social-text">Our login with</span>

                        <a href="#" class="form__social-icon"><i class="bx bxl-facebook" ></i></a>
                        <a href="#" class="form__social-icon"><i class="bx bxl-google" ></i></a>
                        <a href="#" class="form__social-icon"><i class="bx bxl-instagram" ></i></a>
                        <a href="#" class="form__social-icon"><i class="bx bxl-linkedin-square" ></i></a>
                    </div>
                </form>
            </div>
            </div>

        </div>

        <!-- ===== MAIN JS ===== -->
        <script type="text/javascript" src="bootstrap/js/main.js"></script>
        	<script>
		function validateForm() {
			if (document.forms["formLogin"]["username"].value == "") {
				alert("Username tidak boleh kosong");
				document.forms["formLogin"]["username"].focus();
				return false;
			}
			if (document.forms["formLogin"]["password"].value == "") {
				alert("Password tidak boleh kosong");
				document.forms["formLogin"]["password"].focus();
				return false;
			} else {
				alert("Login Berhasil");
			}
		}
	</script>

               <!-- ===== Footer ===== -->
               <footer>
                <div class="container">
                    <small>Copyright&copy;2020 By 18111387_RickySubagio_TIFRP18CIDA</small>
                </div>
              </footer>
    </body>
</html>