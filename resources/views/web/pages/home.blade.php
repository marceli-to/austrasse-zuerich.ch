@extends('web.app')
@section('seo_title', 'Home')
@section('content')
<x-layout.section>
  <x-misc.pattern :lines="51">
    <x-media.picture :image="'austrasse_zuerich_aussicht'" :alt="'Austrasse Zürich – Aussicht'" />
  </x-misc.pattern>
</x-layout.section>
<x-layout.section class="min-h-[700px] bg-serene px-20 py-20">
  <h1 class="font-semi font-semibold text-2xl">Erstvermietung Frühsommer 2024</h1>
  <p>Mit dem Projekt Nidum entstehen an der Hubelstrasse 3a–e an schöner und ruhiger Lage nahe dem Sempachersee 52 attraktive und familienfreundliche 2.5 bis 5.5-Zimmerwohnungen, welche ab Frühling 2024 bezugsbereit sind.</p>
</x-layout.section>
@endsection