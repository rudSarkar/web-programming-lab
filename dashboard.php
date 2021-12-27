<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blood Donor Web Application</title>
    <link rel="stylesheet" media="all" onload="this.onload=null;this.media='all';" id="ao_optimized_gfonts"
        href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-red">
        <div class="container">
            <div>
                <a href=""><i class="H-icon fab fa-facebook"> </i></a>
                <a href=""><i class="H-icon fab fa-twitter"> </i></a>
                <a href=""><i class="H-icon fab fa-linkedin-in"> </i></a>
            </div>

            <!-- <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a> -->
            <div id="gg">
                <ul class="navbar-nav">
                    <li class="nat">
                        <a class="nav-link active" href="tell:+8801712345678">Call us at 01712345678</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-red">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Blood Donor</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!----login page-->

    

    <div class="login-form">
        <form>
          <h1>Change Date</h1>
          <div class="content">
            <div class="input-field">
              <input type="date"  autocomplete="nope">
            </div>

          </div>
          <div class="action">
            <button>Change</button>
          </div>
        </form>
      </div>


    <!-- Fotter -->
    <footer class="f-back text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

                    <h2 class="f-text">Blood Donor</h2>
                    <br>
                    <p class="f-text">Blood donation site is an automated blood service that connects blood
                        searchers with volutary donors in a moment through self signed</p>
                    <a href=""><i class="f-icon fab fa-facebook"> </i></a>
                    <a href=""><i class="f-icon fab fa-twitter"> </i></a>
                    <a href=""><i class="f-icon fab fa-linkedin-in"> </i></a>



                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h2 class="f-text">links</h2>

                    <a class="f-text f-link" href="">Home</a><br>
                    <a class="f-text f-link" href="">About us</a><br>
                    <a class="f-text f-link" href="">login</a><br>


                </div>

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-white p-4" style="background-color: rgba(48, 13, 13, 0.2);">
            © 2021 Copyright:
            <a class="text-white f-link" href="https://github.com/rudSarkar/web-programming-lab">Blood Donor</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>