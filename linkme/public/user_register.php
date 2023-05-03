<?php include_once("../private/Services/ServiceError.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkme | Register</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" href="../styles/style.css">
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Font Awesome v4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Acme|Alegreya|Alegreya+Sans|Anton|Archivo|Archivo+Black|Archivo+Narrow|Arimo|Arvo|Asap|Asap+Condensed|Bitter|Bowlby+One+SC|Bree+Serif|Balsamiq+Sans|Cabin|Cairo|Catamaran|Crete+Round|Crimson+Text|Cuprum|Dancing+Script|Dosis|Droid+Sans|Droid+Serif|EB+Garamond|Exo|Exo+2|Faustina|Fira+Sans|Fjalla+One|Francois+One|Gloria+Hallelujah|Hind|Inconsolata|Indie+Flower|Josefin+Sans|Julee|Karla|Lato|Libre+Baskerville|Libre+Franklin|Lobster|Lora|Mada|Manuale|Maven+Pro|Merriweather|Merriweather+Sans|Montserrat|Montserrat+Subrayada|Mukta+Vaani|Muli|Noto+Sans|Noto+Serif|Nunito|Open+Sans|Open+Sans+Condensed:300|Oswald|Oxygen|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|Pacifico|Passion+One|Pathway+Gothic+One|Play|Playfair+Display|Poppins|Questrial|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Ropa+Sans|Rubik|Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Sedgwick+Ave|Sedgwick+Ave+Display|Shadows+Into+Light|Signika|Slabo+27px|Source+Code+Pro|Source+Sans+Pro|Spectral|Titillium+Web|Ubuntu|Ubuntu+Condensed|Varela+Round|Vollkorn|Work+Sans|Yanone+Kaffeesatz|Zilla+Slab|Zilla+Slab+Highlight" rel="stylesheet">
    <!-- Bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="body-register">

    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="row">
        <div class="col-md-6 mt-3">
                <section class="py-4 py-xl-5 mt-5">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6 col-xl-6">
                                    <h1 id="title-register">Create your <pink>Linkme</pink></h1>
                                    <p id="text-register">The best way to connect your life</p>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        <div class="col-md-6 mt-3">
                <section class="py-4 py-xl-5">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 col-xl-6">
                                <div id="card-register" class="card mb-5">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <form action="../private/Services/CreateUser.php" method="post" class="text-center" id="formRegister">
                                            <div class="mb-3 mt-3">
                                                <input oninput="this.value = this.value.toUpperCase();" type="text" maxlength="200" class="form-control" id="name" name="name" placeholder="Name" required>
                                            </div>
                                            <div class="mb-3">
                                                <input oninput="this.value = this.value.toLowerCase();" onchange="validationUsername(this.value);" type="text" maxlength="200" class="form-control" id="username" name="username" placeholder="Username" required>
                                                <p class="text-message text-uppercase" id="messageUsername"></p>
                                            </div>
                                            <div class="mb-3">
                                                <input onchange="validationEmail(this.value);" type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                <p class="text-message text-uppercase" id="messageEmail"></p>
                                            </div>
                                            <div class="mb-3">
                                                <input onchange="confirmPassword();" type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                                <p class="text-message text-uppercase" id="messagePassword"></p>
                                            </div>
                                            <div class="mb-3">
                                                <input onchange="confirmPassword();" type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm Password" required>
                                                <p class="text-message text-uppercase" id="messagePasswordCofirm"></p>
                                            </div>
                                            <p class="error-register text-uppercase"><?php if (isset($msg)) echo $msg; ?></p>
                                            <div class="mb-3">
                                                <button id="btn-save" class="btn d-block w-100" type="submit">Save</button>
                                            </div>
                                            <p class="text-muted">Already have an account? <a id="link-login" href="index.php">Sign In</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    
    <script src="../js/user_register.js"></script>
    <script src="../js/sweet_alert.js"></script>

<!-- Boostrap v5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- Sweet Alert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>