<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HAMB MOVIES DATABASE</title>
    <link rel="stylesheet" href="css/normalize-3.0.3.min.css">
    <link rel="stylesheet" href="css/font-awesome-4.3.0.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Feuilles de styles de l'application -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!--RESPONSIVE-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Librairie jQuery -->
    <script src="libs/jQuery_v3.4.1.js"></script>

    <!-- JavaScript de l'application -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/services/getData.js"></script>
</head>

<!-- En-tête commune -->
<header class="container-fluid">          
         <!--Navbar-->
        <nav class="navbar navbar-light amber lighten-4 mb-4">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="index.php"><i class="fas fa-video fa-3x"></i>&nbsp;Hamb Movies Database</a>
            <!-- Collapse button -->
            <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
            aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon1"><span></span><span></span><span></span></div>
            </button>
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent20">           
                <ul class="navbar-nav mr-auto">
                    
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="films.php"><i class="fas fa-film"></i>&nbsp;&nbsp;Films</a>
                        </li>             
     
                    
                </ul>
            </div>
        </nav> 
       

<!--/.Navbar-->
</header>

<body>



<main>


<form class="form-group">
    <input type="text" class="form-control" id="searchTerm" placeholder="Search movies...">
</form>

<div id="gallery"></div> 

<div id="title-film"></div>


<script src="js/performSearch.js"></script>

</main>

<!-- Pied de page commun -->
<footer>
    <div></div>
    <small>Hamb Movies Database &copy; - <?php echo date('Y');?></small> 
    <p><small>Réalisé avec &nbsp; <i class="fas fa-heart"></i> &nbsp; par Bruno Soares</small></p>    
</footer>

<!-- Code principal JavaScript de l'application -->
<script src="js/main.js"></script>
    
</body>
</html>