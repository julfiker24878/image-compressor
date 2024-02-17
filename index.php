<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Image Compressor - Julfiker Ali</title>
	<meta name="description" content="Are you looking for someone who can design or develop a professional website for you? Then you're in the right place, welcome!">
	<meta content="Author" name="Julfiker Ali">
	<meta name="robots" content="index, follow">
	<meta property="og:title" content="Web Applications - Julfiker Ali">
	<meta property="og:description" content="Julfiker Ali Web Application: Image Compressor">
	<meta property="og:image" content="assets/images/favicon.png">
	<link rel="canonical" href="http://julfikerali.com/">
	
	<!-- Favicons -->
	<link href="assets/images/favicon.png" rel="icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Image Compressor - Julfiker Ali</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container d-flex justify-content-between">
            <a href="index.php" class="navbar-brand"><img src="assets/images/favicon.png" width="50">Julfiker Ali</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- IMAGE COMPRESSOR -->
    <section id="image-compressor">
        <div class="container">
            <h2>Image Compressor</h2>
            <div class="row">
                <div class="col-md-6">
                <img src="sample.png"> 
                </div>
                <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h3>Compress Your Images Now!</h3>
                    </div>
                    <div class="card-body">
                    <form action="forms/compressor.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Insert image...</label>
                            <input name="image" type="file" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Compress</button>
                            <?php if(isset($_SESSION['img_compressed'])){ ?>
                                <?php echo $_SESSION['img_compressed']; ?>
                            <?php } unset($_SESSION['img_compressed']); ?>
                    </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer" class="bg-dark">
        <div class="container">
            <div class="row">
                <p class="text-white">Copyright &copy; 2021 - <a href="https://julfikerali.com" target="_blank"><strong>Julfiker Ali</strong></a> - All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>