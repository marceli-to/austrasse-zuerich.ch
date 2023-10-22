@extends('app')
@section('seo_title', 'Projekt')
@section('seo_description', 'Mit dem Projekt Austrasse entstehen an einer zentralen Lage neue 1.5- bis 5.5-Zimmerwohnungen, welche sich über drei Gebäude verteilen. Die Gebäude betten sich hervorragend in die topografischen Gegebenheiten ein. Sie repräsentieren die zentrale und doch naturnahe Lage.')
@section('content')
<x-layout.section class="!p-0">
  <x-misc.pattern class="hidden sm:block right-0 sm:w-[20%] xl:w-[25%]" />
  <x-layout.inner class="px-20 lg:px-0 py-30 lg:py-50 relative z-10">
    <h1>Projekt</h1>
    <x-layout.grid>
      <x-layout.span class="hyphens-auto">
        <p>Mit dem Projekt Austrasse entstehen an einer zentralen Lage neue 1.5- bis 5.5-Zimmerwohnungen, welche sich über drei Gebäude verteilen. Die Gebäude betten sich hervorragend in die topografischen Gegebenheiten ein. Sie repräsentieren die zentrale und doch naturnahe Lage.</p>
        <p>Die Häuser werden in drei Etappen fertiggestellt.</p>
        
        <table class="my-16 lg:my-20">
          <tr>
            <td class="pr-12 pb-4">Haus 1: Wiedingstrasse 87a–d:</td>
            <td class="pb-4">01.06.2024</td>
          </tr>
          <tr>
            <td class="pr-12 pb-4">Haus 2: Austrasse 50–56:</td>
            <td class="pb-4">01.08.2024</td>
          </tr>
          <tr>
            <td class="pr-12">Haus 3: Austrasse 46/48:</td>
            <td>01.05.2024</td>
          </tr>
        </table>
        <p>Ein Spazierweg in Form eines «Belt Walk» führt um die zwei länglichen, vielwinkligen Baukörper, wodurch ein zusammenhängender und deshalb prägender Landschaftsraum – der Waldgarten – entsteht. Die Umgebung wird parkähnlich mit Spielplatz, Sitzbänken und viel Aufenthaltsflächen gestaltet.</p>
        <p>Die drei Gebäude bestechen nicht nur mit ihrer einzigartigen Architektur, sondern auch durch einen ausgewogenen Wohnungsmix und grosszügigen Aussenbereichen.</p>
        <p>Mit der zentralen Lage dieser neuen Überbauung in Alt-Wiedikon profitieren die Bewohner und Bewohnerinnen von kurzen Wegen in der Stadt Zürich. Zudem existiert eine hervorragende Infrastruktur und Anbindung an den öffentlichen Verkehr. Der Bahnhof Zürich Binz zum Beispiel liegt in direkter Nachbarschaft zu Ihrem neuen Zuhause.</p>
        <p>In der Überbauung Austrasse stehen für die Bewohnenden Paketboxanlagen zur Verfügung. So können Pakete zeitlich unabhängig sicher empfangen und Rücksendungen bequem aufgegeben werden.</p>
        <p>Verteilt in den Gebäuden stehen den Mietenden drei Gemeinschaftsräume für private oder nachbarschaftliche Anlässe zur Verfügung.</p>
        <p>Des Weiteren verfügt die Überbauung über eine eigen Photovoltaikanlage auf dem Dach, wo der produzierte Strom im Rahmen eines Zusammenschlusses zum Eigenverbrauch (ZEV) genutzt wird.</p>
      </x-layout.span>
      <x-layout.span>
        <a data-fancybox href="/media/img/austrasse_zuerich_aussenvisualisierung-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_aussenvisualisierung'" :alt="'Austrasse Zürich – Aussenvisualisierung'" />
        </a>
        <a data-fancybox href="/media/img/austrasse_zuerich_balkon-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_balkon'" :alt="'Austrasse Zürich – Balkon'" class="mt-20 lg:mt-40" />
        </a>
        <a data-fancybox href="/media/img/austrasse_zuerich_ansicht_oben-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_ansicht_oben'" :alt="'Austrasse Zürich – Ansicht von oben'" class="mt-20 lg:mt-40" />
        </a>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
<x-layout.section class="bg-white">
  <x-layout.inner>
    <a name="umgebung" class="scroll-mt-94 md:scroll-mt-[150px]"></a>
    <h2>Umgebung</h2>
    <x-layout.grid>
      <x-layout.span class="hyphens-auto">
        <p>Die Überbauung «Austrasse» entsteht im beliebten Kreis 3 im Quartier Alt Wiedikon. Hier finden Sie alles, was Sie brauchen. Von vielfältigen Einkaufsmöglichkeiten und Gastronomieangeboten, bis hin zu Sporteinrichtungen und Schulen.</p>
        <p>Die drei Gebäude befinden sich zurückversetzt in einer ruhigen 30er Zone. Der Uetliberg oder der Zürichsee als Naherholungsgebiete lassen sich mit dem Fahrrad in einer kurzen Fahrzeit erreichen.</p>
        <p>Nutzer des öffentlichen Verkehrs profitieren von den sehr guten Anschlüssen am Bahnhof Binz, welcher sich in unmittelbarer Nähe befindet. Mit dem Zug erreicht man den Hauptbahnhof Zürich in 13 Fahrminuten. Die Nähe zur Autobahn macht die Lage auch für Automobilisten attraktiv.</p>
       
        <div class="mt-20 lg:mt-32 flex gap-x-16 sm:gap-x-24">
          <a
           href="/media/img/austrasse_zuerich_situationsplan-lg.png"
           title="Situationsplan"
           target="_blank"
           rel="noopener noreferrer"
           class="bg-olive font-semi font-normal flex text-white py-12 px-12 leading-none hover:bg-serene transition-colors">
           Situationsplan
          </a>
          <a
           href="https://maps.app.goo.gl/L51oqEgKC4ZJ14MC9"
           title="Google Maps"
           target="_blank"
           rel="noopener noreferrer"
           class="bg-olive font-semi font-normal flex text-white py-12 px-12 leading-none hover:bg-serene transition-colors">
           Google Maps
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