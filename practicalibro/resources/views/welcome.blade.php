@extends('layouts.navbar')
@section('titulo','Principal')
@section('contenido')

<h1 class="titulo">{{ __('Bibloteca Los Tres Cerditos') }}</h1>
<div class="containernoticia">
    <div class="card text-center">
        <div class="card-header">
            <strong> {{ __('Noticia Literaria del día') }}</strong>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ __('Otorgan el Premio Nobel de Literatura a Han Kang por su “intensa prosa poética” que confronta la fragilidad humana; es la primera surcoreana en ganarlo') }}</h5>
        <img src="{{ asset('img/han.webp') }}" class="img-han" alt="Noticia Literaria">
            <p class="card-text"><p class="card-text">{{ __('Han, de 53 años, comenzó su carrera con un grupo de poemas en una revista surcoreana, antes de debutar en prosa en 1995 con una colección de relatos cortos. Más tarde empezó a escribir obras en prosa más largas, entre las que destaca “La vegetariana” (“The vegetarian”), uno de sus primeros libros traducidos al inglés. La novela, que ganó el premio Man Booker International en 2016, narra el intento de una joven para vivir una existencia más “vegetal” tras sufrir macabras pesadillas sobre la crueldad humana. Han es la primera autora surcoreana que gana el premio de literatura, y apenas la 18ª mujer de los 117 galardones concedidos desde 1901. Gran parte de la obra de Han plantea la pregunta, expresada por un personaje de su novela de 2019 “Europa”, cuyo protagonista se ve atormentado por pesadillas: “Si pudieras vivir como deseas, ¿qué harías con tu vida?”. Aunque muchas de las protagonistas de Han son mujeres, sus obras en prosa suelen estar narradas desde la perspectiva de los hombres. “Antes de que mi mujer se hiciera vegetariana, siempre había pensado en ella como alguien completamente intrascendente en todos los sentidos”, comienza su novela “La vegetariana”. “Sin embargo, si no había ningún atractivo especial, tampoco se presentaba ningún inconveniente en particular, y por lo tanto no había ninguna razón para que los dos no nos casáramos”. Escrito y publicado originalmente en coreano, “La vegetariana” fue traducido por Deborah Smith, que entonces tenía 28 años. Smith, según admite ella misma, fue “monolingüe hasta los 21 años”, y solo optó por el coreano debido a la falta de traductores inglés-coreano. La Academia Sueca alabó la obra de Han por su “conciencia única de las conexiones entre el cuerpo y el alma, los vivos y los muertos”. A través de su “estilo poético y experimental”, dijo la Academia, Han “se ha convertido en una innovadora de la prosa contemporánea”. Anna-Karin Palm, miembro del Comité Nobel de Literatura, dijo que los lectores que no estén familiarizados con la obra de Han deberían empezar por “Human Acts” (“Actos humanos”), una novela de 2014 que reflexiona sobre el Levantamiento de Gwangju de 1980, cuando más de 100 civiles fueron asesinados durante las manifestaciones prodemocráticas lideradas por estudiantes en la ciudad surcoreana. “Actos humanos” muestra cómo “los vivos y los muertos están siempre entrelazados y cómo este tipo de traumas permanecen en una población durante generaciones”, dijo Palm en la ceremonia de anuncio de este jueves. Pero la escritura “intensa y lírica” de Han casi actúa como consuelo frente a esta violencia histórica, añadió Palm. “Su prosa, muy tierna y precisa, se convierte casi en un contrapunto al brutal ruido del poder”, afirmó. Antes del anuncio, Ellen Mattson, otra integrante del comité, detalló cómo el jurado selecciona cada año al galardonado. “Empezamos con una lista muy larga de unos 220 nombres”, explicó Mattson. “Luego tenemos que navegar a través de esa enorme masa de nombres - y ahí necesitamos la ayuda de expertos de diferentes partes del mundo”. Al final, el comité llega a una colección de “unos 20 nombres”, que luego se reduce a una preselección de cinco autores. “Ahí es donde empieza el verdadero trabajo”, explica Mattson. A continuación, cada miembro del comité tiene que “leer todo lo que escriban esos cinco autores” para empezar a perfilar un único ganador.') }}</p>
</div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
    </div>
</div>

<x-footer></x-footer>

@endsection