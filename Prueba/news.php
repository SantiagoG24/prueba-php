<?php
function showNoticia($i){
    require_once 'noticia.php';
    // if (!isset($_GET['id'])){
    //     echo "<h2>Error! Género no especificado.</h2>";
    //     die();
    // }
    // $id = $_GET['id'];
    $noticias=getNoticias();
    $noticia_new=$noticias[$i-1];
    ?>
    <h1><?php echo $noticia_new->title?></h1>
    <img src="<?php echo $noticia_new->img?>" alt="<?php echo $noticia_new->img?>">
    <p><?php echo $noticia_new->text ?></p>
    <?php
}
?>  