<?php
include_once("../vendor/autoload.php");
include_once("../private/db_connection.php");
use MyApp\Entities\User;
use MyApp\Entities\UserLinks;
use MyApp\Entities\UserProfile;

if (!isset($_SESSION)) session_start();

if (!isset($_GET['my'])) {
    session_destroy();
    header("Location: 404.php"); exit;
}

$username = $_GET['my'];
$userClass = new User;
$user = $userClass->getUserByUsername($username);

$links = UserLinks::getByUserId($user->id);
$profile = UserProfile::getProfileByUserId($user->id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $username; ?> | Linkme</title>
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
<body style="background: <?php echo $profile->background_color; ?>;">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="py-4 py-xl-5">
                <div class="container test">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div style="font-family: <?php echo $profile->font_family; ?>;" class="text-center mt-5 mb-5">
                            <h6 class="mb-5" style="color: <?php echo $profile->font_color; ?>; font-weight:600; font-size: 2rem;"> @<?php echo $username; ?></h6>
                            <?php if ($links != null) : ?>
                                <?php foreach ($links as $link) : ?>
                                    <a type="button" target="_blank" style="background: <?php echo $profile->button_color; ?>; border: 3px solid <?php echo $profile->button_border_color; ?>;color: <?php echo $profile->font_color; ?>; font-size: 1.3rem;" class="<?php echo $profile->button_class; ?> mb-3" href="<?php echo $link['4'] ;?>"><?php echo $link['3']; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php include('footer_profile.php'); ?>

<!-- Bootstrap v5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- Sweet Alert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>