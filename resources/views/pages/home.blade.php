@extends('app')
@section('seo_title', 'Home')
@section('content')
<x-layout.section class="bg-white relative !p-0">
  <x-misc.pattern />
  <x-layout.inner>
    <div class="flex relative pl-105 md:pl-[203px] lg:pl-[245px]">
      <x-icons.bubble-claim class="absolute z-50 -bottom-20 lg:-bottom-30 xl:-bottom-40 left-16 lg:left-20 xl:left-0 w-116 sm:w-200 lg:w-[260px] xl:w-[320px] h-auto" />
      <x-media.picture :lazy="false" :image="'austrasse_zuerich_aussicht'" :alt="'Austrasse Zürich – Aussicht'" class="aspect-[16/8] md:aspect-[16/7]" />
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="bg-white pt-35 xl:pt-70">
  <x-layout.inner>
    <div class="lg:max-w-3xl xl:max-w-4xl">
      <div class="mb-32">
        <h1 class="mb-6 lg:mb-6">Erstvermietung Frühsommer 2024</h1>
        <p>1.5 – 5.5-Zimmerwohnungen<br>Gewerbeflächen ab 58 m<sup>2</sup></p>
      </div>
      <p>Im Kreis 3 der Stadt Zürich entsteht zwischen dem historischen Kern von Alt-Wiedikon und der Binz die neue Wohnüberbauung «Austrasse», welche die Natur in die Stadt bringt. Verteilt auf mehrere Gebäudeteile (Austrasse 46 – 56 und Wiedingstrasse 87a-d) werden in drei Etappen Mietwohnungen und diverse Büro- und Gewerbeflächen realisiert. Das Wohnungsangebot reicht von der 1.5 – Zimmerwohnung bis hin zur grosszügigen 5.5 – Zimmerwohnung.</p>
      <p>Die modernen und energetisch nachhaltigen Wohnungen können etappiert ab Frühsommer 2024 bezogen werden.</p>
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

<x-layout.section class="bg-white">
  <x-layout.inner>
    <x-layout.grid class="grid grid-cols-12 gap-15">
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.living'" :title="'Wohnungen'" :image="'austrasse_zuerich_wohnzimmer_quadrat'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.living'" :title="'Moderner<br>Ausbau'" :image="'austrasse_zuerich_wohnzimmer_kueche_08_quadrat'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.business'" :title="'Attraktive<br>Gewerbeflächen'" :image="'austrasse_zuerich_bueros_09_quadrat'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.apartments'" :title="'Wohnen'" :image="'austrasse_zuerich_ansicht_oben_quadrat'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.contact'" :title="'Umgebung'" :image="'austrasse_zuerich_aussicht_quadrat'" />
      </x-layout.span>
      <x-layout.span class="!mb-0 col-span-6 md:col-span-4">
        <x-menu.card :route="'page.qa'" :title="'Q&A'" :image="'austrasse_zuerich_balkon_quadrat'" />
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
@endsection