<?php
function getNoticias(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_noticias;charset=utf8', 'root', '');
        $query=$db->prepare('SELECT * FROM news');
        $query->execute();
        $noticias=$query->fetchAll(PDO::FETCH_OBJ);
        return $noticias;
//     $n0 =new stdClass();
//     $n0 ->title='¿Por qué Leclerc y Verstappen partirán desde el fondo en Bélgica?';
//     $n0 ->text='Las vacaciones de la Fórmula 1 llegaron a su fin. Ya pasó el descanso de cada verano y, en consecuencia, los pilotos se encuentran listos para encarar el tramo final de la temporada. Y el regreso a la actividad se está dando en el Gran Premio de Bélgica, que comenzó con dos prácticas libres bajo la lluvia en las que el dominio de las tandas se dividió entre Max Verstappen, el más rápido en la segunda sesión (le sacó casi un segundo al resto), y los dos hombres de Ferrari, Charles Leclerc y Carlos Sainz.';
//     $n0->img='img/f1_noticia.png';
//     $n0->id='0';

//     $n1 =new stdClass();
//     $n1 ->title='Argentina gana contra Brasil  ';
//     $n1 ->text='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cumque perferendis esse quia veniam commodi eius quibusdam quasi officia architecto maiores asperiores nobis quidem praesentium iure, sed eligendi vel aliquid.';
//     $n1->img='img/messi.jpg';
//     $n1->id='1';

//     $n2 =new stdClass();
//     $n2 ->title='Se retira Roger Federer';
//     $n2 ->text='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cumque perferendis esse quia veniam commodi eius quibusdam quasi officia architecto maiores asperiores nobis quidem praesentium iure, sed eligendi vel aliquid.';
//     $n2->img='img/roger-federer.jpeg';
//     $n2->id='2';

//     $noticias= array(
//         "noticia0"=>$n0,
//         "noticia1"=>$n1,
//         "noticia2"=>$n2
//     );
//     return $noticias;
}