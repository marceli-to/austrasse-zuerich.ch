@extends('app')
@section('seo_title', 'Galerie')
@section('seo_description', 'Im Kreis 3 der Stadt Zürich entsteht zwischen dem historischen Kern von Alt-Wiedikon und der Binz die neue Wohnüberbauung «Austrasse», welche die Natur in die Stadt bringt. Verteilt auf mehrere Gebäudeteile (Austrasse 46 – 56 und Wiedingstrasse 87a-d) werden in drei Etappen Mietwohnungen und diverse Büro- und Gewerbeflächen realisiert. Das Wohnungsangebot reicht von der 1.5 – Zimmerwohnung bis hin zur grosszügigen 5.5 – Zimmerwohnung.')
@section('content')
@php
$images_type_a = [
  'austrasse_zuerich_galerie_typ_a_1',
  'austrasse_zuerich_galerie_typ_a_2',
  'austrasse_zuerich_galerie_typ_a_3',
  'austrasse_zuerich_galerie_typ_a_4',
  'austrasse_zuerich_galerie_typ_a_5',
  'austrasse_zuerich_galerie_typ_a_6',
  'austrasse_zuerich_galerie_typ_a_7',
  'austrasse_zuerich_galerie_typ_a_8',
  'austrasse_zuerich_galerie_typ_a_9',
  'austrasse_zuerich_galerie_typ_a_10',
  'austrasse_zuerich_galerie_typ_a_11',
  'austrasse_zuerich_galerie_typ_a_12',
];

$images_type_b = [
  'austrasse_zuerich_galerie_typ_b_1',
  'austrasse_zuerich_galerie_typ_b_2',
  'austrasse_zuerich_galerie_typ_b_3',
  'austrasse_zuerich_galerie_typ_b_4',
  'austrasse_zuerich_galerie_typ_b_5',
  'austrasse_zuerich_galerie_typ_b_6',
  'austrasse_zuerich_galerie_typ_b_7',
  'austrasse_zuerich_galerie_typ_b_8',
  'austrasse_zuerich_galerie_typ_b_9',
  'austrasse_zuerich_galerie_typ_b_10',
  'austrasse_zuerich_galerie_typ_b_11',
  'austrasse_zuerich_galerie_typ_b_12'
];

$images_type_c = [
  'austrasse_zuerich_galerie_typ_c_1',
  'austrasse_zuerich_galerie_typ_c_2',
  'austrasse_zuerich_galerie_typ_c_3',
  'austrasse_zuerich_galerie_typ_c_4',
  'austrasse_zuerich_galerie_typ_c_5',
  'austrasse_zuerich_galerie_typ_c_6',
  'austrasse_zuerich_galerie_typ_c_7',
  'austrasse_zuerich_galerie_typ_c_8',
  'austrasse_zuerich_galerie_typ_c_9',
  'austrasse_zuerich_galerie_typ_c_10',
  'austrasse_zuerich_galerie_typ_c_11'
];

@endphp
<x-layout.section>
  <x-layout.inner>
    <h1>Galerie – Typ A</h1>
  </x-layout.inner>
  <x-layout.inner>
    <x-gallery.wrapper :images="$images_type_a" caption="Typ A" />
  </x-layout.inner>

  <x-layout.inner class="mt-16 lg:mt-32 xl:mt-48">
    <h1>Galerie – Typ B</h1>
  </x-layout.inner>
  <x-layout.inner>
    <x-gallery.wrapper :images="$images_type_b" caption="Typ B" />
  </x-layout.inner>

  <x-layout.inner class="mt-16 lg:mt-32 xl:mt-48">
    <h1>Galerie – Typ C</h1>
  </x-layout.inner>
  <x-layout.inner>
    <x-gallery.wrapper :images="$images_type_c" caption="Typ C" />
  </x-layout.inner>

</x-layout.section>
@endsection