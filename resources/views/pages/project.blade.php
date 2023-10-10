@extends('app')
@section('seo_title', 'Projekt')
@section('content')
<x-layout.section class="!p-0">
  <x-misc.pattern class="hidden sm:block right-0 sm:w-[20%] xl:w-[25%]" />
  <x-layout.inner class="px-20 lg:px-0 py-30 lg:py-50 relative z-10">
    <h1>Projekt</h1>
    <x-layout.grid>
      <x-layout.span>
        <p>Mit dem Projekt Nidum entstehen an der Hubelstrasse 3a–e an schöner und ruhiger Lage nahe dem Sempachersee 52 attraktive und familienfreundliche 2.5- bis 5.5-Zimmerwohnungen, welche ab April (Häuser a, d, e) und Mai (Häuser b, c) 2024 bezugsbereit sind.</p>
        <p>Die fünf Gebäude bestechen nicht nur durch eine moderne, sehr ansprechende Aussenwirkung, sondern auch durch einen ausgewogenen Wohnungsmix und einladende Aussenbereiche.</p>
        <p>Sempach ist durch die idyllische Lage am Sempachersee wie auch die historische Altstadt ein beliebter Wohn- und auch Besuchsort. Der Bahnhof Sempach-Neuenkirch, von wo aus direkte Züge nach Luzern, Zug und Olten verkehren, ist innert wenigen Minuten mit dem Bus erreichbar.</p>
        <p>Zudem ist ein Supermarkt wie auch das Seebad nur wenige Gehminuten von der Liegenschaft entfernt. Das Schulareal von Sempach mit Kindergarten, Primar- und Sekundarschule ist ebenfalls in sicherer Gehdistanz zu erreichen.</p>
      </x-layout.span>
      <x-layout.span>
        <a data-fancybox href="/media/img/austrasse_zuerich_balkon-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_balkon'" :alt="'Austrasse Zürich – Balkon'" />
        </a>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
<x-layout.section class="bg-white">
  <x-layout.inner>
    <h2>Umgebung</h2>
    <x-layout.grid>
      <x-layout.span>
        <p>Die Überbauung «Austrasse, Zürich» entsteht im beliebten Kreis 3 im Quartier Alt-Wiedikon. Hier finden Sie alles, was Sie brauchen. Von vielfältigen Einkaufsmöglichkeiten und Gastronomieangeboten, bis hin zu Sporteinrichtungen und Schulen.</p>
        <p>Die drei Gebäude befinden sich zurückversetzt in einer ruhigen 30er-Zone. Der Uetliberg oder der Zürichsee als Naherholungsgebiete lassen sich mit dem Fahrrad in einer angenehmen Fahrzeit erreichen. Nutzer des öffentlichen Verkehrs profitieren von den sehr guten Anschlüssen am Bahnhof Binz, welcher sich in unmittelbarer Nähe befindet. Mit dem Zug erreicht man den Hauptbahnhof Zürich in 13 Fahrminuten. Die Nähe zur Autobahn macht die Lage auch für Automobilisten attraktiv.</p>
        <div class="mt-20 lg:mt-32 flex sm:gap-24">
          <a
           href=""
           title="Situationsplan"
           target="_blank"
           rel="noopener noreferrer"
           class="bg-olive font-semi font-normal flex text-white py-12 px-12 leading-none hover:bg-serene transition-colors">
           Situationsplan
          </a>
          <a
           href="https://www.sbb.ch/de"
           title="SBB-Fahrplan"
           target="_blank"
           rel="noopener noreferrer"
           class="bg-olive font-semi font-normal flex text-white py-12 px-12 leading-none hover:bg-serene transition-colors">
           SBB-Fahrplan
          </a>
        </div>
      </x-layout.span>
      <x-layout.span>
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_situationsplan-lg.png">
          <x-media.picture :image="'austrasse_zuerich_situationsplan'" :format="'.png'" :alt="'Austrasse Zürich – Situationsplan'" />
        </a>
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_distanzen-lg.png">
          <x-media.picture :image="'austrasse_zuerich_distanzen'" :format="'.png'" :alt="'Austrasse Zürich – Distanzen'" class="mt-20 lg:mt-40" />
        </a>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
@endsection