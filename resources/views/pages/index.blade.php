@extends("layouts.template")

@section("corps")

    @include("sections.entete", compact('entetes'))
    @include("sections.about", compact('abouts'))
    @include("sections.parcours")
    @include("sections.engagement")
    @include("sections.actualite")
    @include("sections.temoignage")
    @include("sections.event")
    @include("sections.partenaire")
@endsection
