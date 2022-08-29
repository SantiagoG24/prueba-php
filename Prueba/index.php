
<?php 
require_once 'header.html';
require_once 'noticia.php';
?>
<nav class="navbar navbar-dark bg-dark">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</nav>
<?php
foreach($noticias as $noticia){
?>
<div class="card" style="width: 18rem;">
  <img src="<?php echo $noticia->img?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $noticia->title?></h5>
    <p class="card-text"><?php echo $noticia->text?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php
}
require_once 'footer.html';

  