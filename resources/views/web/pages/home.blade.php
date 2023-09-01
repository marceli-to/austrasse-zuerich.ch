@extends('web.app')
@section('seo_title', 'Home')
@section('content')
<x-layout.section class="relative !p-0">
  <x-misc.pattern />
  <x-layout.inner>
    <div class="flex relative pl-105 md:pl-[203px] lg:pl-[245px]">
      <x-icons.bubble-claim class="absolute -bottom-20 lg:-bottom-30 xl:-bottom-40 left-16 lg:left-20 xl:left-0 w-116 sm:w-200 lg:w-[260px] xl:w-[320px] h-auto" />
      <x-media.picture :image="'austrasse_zuerich_aussicht'" :alt="'Austrasse Zürich – Aussicht'" />
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="pt-35 xl:pt-70">
  <x-layout.inner>
    <div class="lg:max-w-3xl xl:max-w-4xl">
      <div class="mb-32">
        <h1 class="mb-6 lg:mb-6">Erstvermietung Frühsommer 2024</h1>
        <p>1.5- bis 5.5-Zimmerwohnungen<br>Gewerbeflächen ab 58 m<sup>2</sup></p>
      </div>
      <p>Mit dem Projekt Nidum entstehen an der Hubelstrasse 3a–e an schöner und ruhiger Lage nahe dem Sempachersee 52 attraktive und familienfreundliche 2.5 bis 5.5-Zimmerwohnungen, welche ab Frühling 2024 bezugsbereit sind.</p>
      <p>Sempach ist durch die idyllische Lage am Sempachersee wie auch die historische Altstadt ein beliebter Wohn- und auch Besuchsort. Der Bahnhof Sempach-Neuenkirch von wo aus direkte Züge nach Luzern, Zug und Olten verkehren ist innert wenigen Minuten mit dem Bus erreichbar.</p>
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="bg-serene">
  <x-layout.inner>
    <x-layout.grid>
      <x-layout.span class="sm:col-span-8">
        <h2>SNBS- Zertifizierung</h2>
        <p>Die Wohnsiedlung Austrasse hat die erste Konformitätsprüfung bestanden und ist somit provisorisch mit einer SNBS-Zertifizierung (Standard Nachhaltiges Bauen Schweiz) ausgezeichnet worden.</p>
      </x-layout.span>
      <x-layout.span class="!mb-0 sm:col-span-4 sm:col-start-10">
        <img 
          src="/media/img/austrasse_zuerich_snbs_zertifizierung.png" 
          height="350" 
          width="350" 
          alt="Austrasse Zürich – SNBS-Zertifizierung"
          class="block w-120 md:w-145 xl:w-180 h-auto">
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>

<x-layout.section>
  <x-layout.inner>
    <x-layout.grid class="grid grid-cols-12 gap-15">
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.living'" :title="'Moderner<br>Ausbau'" :image="'austrasse_zuerich_wohnzimmer-sm'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.living'" :title="'Attraktive<br>Gewerbeflächen'" :image="'austrasse_zuerich_balkon-aussen-sm'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.living'" :title="'Wohnen'" :image="'austrasse_zuerich_wohnzimmer-sm'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.living'" :title="'Wohnen'" :image="'austrasse_zuerich_wohnzimmer-sm'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.living'" :title="'Wohnen'" :image="'austrasse_zuerich_wohnzimmer-sm'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.living'" :title="'Wohnen'" :image="'austrasse_zuerich_wohnzimmer-sm'" />
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
@endsection