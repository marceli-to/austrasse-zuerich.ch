@extends('web.app')
@section('seo_title', 'Home')
@section('content')
<x-layout.section class="relative !p-0">
  <x-misc.pattern :lines="100" />
  <x-layout.inner class="">
    <div class="flex relative pl-119 md:pl-[203px] lg:pl-[245px]">
      <x-media.picture :image="'austrasse_zuerich_aussicht'" :alt="'Austrasse Zürich – Aussicht'" />
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="min-h-[150px] px-20 py-20">
  <x-layout.inner>
    <div class="lg:max-w-3xl xl:max-w-4xl">
      <div class="mb-32">
        <h1 class="mb-6">Erstvermietung Frühsommer 2024</h1>
        <p>1.5- bis 5.5-Zimmerwohnungen<br>Gewerbeflächen ab 58 m<sup>2</sup></p>
      </div>
      <p>Mit dem Projekt Nidum entstehen an der Hubelstrasse 3a–e an schöner und ruhiger Lage nahe dem Sempachersee 52 attraktive und familienfreundliche 2.5 bis 5.5-Zimmerwohnungen, welche ab Frühling 2024 bezugsbereit sind.</p>
      <p>Sempach ist durch die idyllische Lage am Sempachersee wie auch die historische Altstadt ein beliebter Wohn- und auch Besuchsort. Der Bahnhof Sempach-Neuenkirch von wo aus direkte Züge nach Luzern, Zug und Olten verkehren ist innert wenigen Minuten mit dem Bus erreichbar.</p>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection