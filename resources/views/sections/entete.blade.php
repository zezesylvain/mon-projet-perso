<!--HEADER(HAUT DE PAGE)-->
<header class="hautde_page">
    <div class="title_soustitle">
        <h4>
            {{ $entetes["titre"] }}
        </h4>
        <p class="sous_titre">
            {{ $entetes["description"] }}
        </p>
    </div>
    <span class="img_header">
        <img src="{{ asset("storage/".$entetes["image"]) }}" alt=" {{ $entetes["titre"] }}">
    </span>
</header>
