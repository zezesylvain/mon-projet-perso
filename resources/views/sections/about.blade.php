<!--ZONE A propos de nous-->
@php
    $images = json_decode($abouts["images"]);
@endphp
<section class="A_propos">
    <div class="apropos_droit">
        <img class="img1" src="{{ asset("storage/".$images[0]) }}" alt="etudiante">
        <img class="img2" src="{{ asset("storage/".$images[1]) }}" alt="etudiants">
        <img class="img3" src="{{ asset("storage/".$images[2]) }}" alt="etudiant">
    </div>
    <div class="apropos_gauche">
        <h3 class="title_vert">
            {{ $abouts["titre"] }}
        </h3>
        <p class="sous_titre">
            {{ $abouts["description"] }}
        </p>
        <button class="Inscription">Lire la suite</button>
    </div>
</section>
