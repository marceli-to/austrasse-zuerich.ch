@extends('app')
@section('seo_title', 'Wohnungen')
@section('content')
<x-layout.section class="!p-0">
  <x-misc.pattern class="hidden sm:block right-0 sm:w-[20%] xl:w-[25%]" />
  <x-layout.inner class="px-20 lg:px-0 py-30 lg:py-50 relative z-10">
    <h1>Wohnungen</h1>
    <x-layout.grid>
      <x-layout.span>
        <p>Beim Ausbau der Wohnungen wird auf ein architektonisches Gesamtkonzept geachtet. So wurden die Wohnungen schlicht aber dennoch modern in einem gehobenen Ausbaustandard konzipiert. Die Umgebung wird parkähnlich mit viel Grün und Aufenthaltsflächen sowie Spielplätzen gestaltet.</p>
        <p>Die Wohnungen verfügen über interessante und gut möblierbare Grundrisse. Der hochwertige Ausbaustandard zieht sich durch die gesamte Überbauung, durch die gewählten Farben und Materialien entsteht ein einheitliches Zusammenspiel zwischen Innen- und Aussenwirkung.</p>
        <p>Die modernen Küchen mit taupe farbenen Keramik-Bodenplatten, weissen Schränken mit Eicheneinlagen, weisser Silestone-Abdeckung und wertigen Elektrogeräten der Marke V-Zug, fügen sich optimal in den restlichen Wohnraum ein und lassen keine Wünsche offen.</p>
        <p>Ein harmonisches Wohngefühl wird dem Wohn-/Essbereich sowie den Schlafzimmern und dem Korridor durch das ausgewählte Fischgrätparkett verliehen. Jede Wohnung verfügt zudem über einen Sitzplatz oder eine Loggia, welche sich direkt vom Wohnbereich aus betreten lässt.</p>
        <p>Die modernen Bäder sind mit Keramikplatten in Taupe ausgestattet und verfügen über eine Dusche oder Badewanne.</p>
        <p>Zudem ist jede Wohnung mit einem eigenen Waschturm im Reduit ausgestattet.</p>
        <p>Zu jeder Wohnung gehört auch ein Kellerabteil.</p>
      </x-layout.span>
      <x-layout.span>
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_eingang-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_eingang'" :alt="'Austrasse Zürich – Eingang'" class="mt-20 lg:mt-40" />
        </a>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
<x-layout.section class="bg-white">
  <x-layout.inner>
    <h2>Ausbau Wohnungen</h2>
    <x-layout.grid class="grid sm:gap-24 lg:gap-48">
      <x-layout.span class="order-1">
        <h3>Eingangsbereich</h3>
        <ul>
          <li>Bodenbeläge: Parkett, Eiche natur geölt, Fischgrat, Sortierung lebendig</li>
          <li>Wände: Variovlies weiss</li>
          <li>Decke: Weissputz</li>
          <li>Garderobe: Weiss, Eicheneinlage Strukturlaminat, Eiche Endgrain Classic</li>
        </ul>
        <h3>Wohnen/Essen/Zimmer</h3>
        <ul>
          <li>Bodenbeläge: Parkett, Eiche natur geölt, Fischgrat, Sortierung lebendig</li>
          <li>Wände: Variovlies weiss</li>
          <li>Decke: Weissputz</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-2">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-4 sm:order-3">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-3 sm:order-4">
        <h3>Küche</h3>
        <ul>
          <li>Bodenbeläge: Keramikplatten, taupe/Parkett, Eiche natur geölt, Fischgrat, Sortierung lebendig</li>
          <li>Wände: Variovlies weiss</li>
          <li>Decke: Weissputz</li>
          <li>Rückwand: Porzellanplatten, Keravita M5QA Zellige Lana</li>
          <li>Einbauten: Fronten Küchenschränke weiss, Eicheneinlage Strukturlaminat, Eiche Endgrain Classic</li>
          <li>Küchenabdeckung: Silestone Blanco Norte</li>
          <li>Geräte: Induktionskochfeld, Dampfabzug oder Induktionskochfeld mit integriertem Dampfabzug (freistehende Kochinseln), Backofen, Kühl- und Gefriergerät, Geschirrspüler</li>
          <li>4.5- und 5.5-ZWG: Backofen/Steamer (Kombigerät)</li>
          <li>Alle Geräte Marke V-Zug ausser Induktionskochfeld mit integriertem Dampfabzug Marke Bora</li>
          <li>Müllex Kehrrichtsystem</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-5">
        <h3>Badezimmer</h3>
        <ul>
          <li>Bodenbeläge: Keramikplatten, taupe</li>
          <li>Wandplatten: Keramikplatten, taupe</li>
          <li>Wände: Weissputz</li>
          <li>Decke: Weissputz</li>
          <li>Sanitärapparate: Keramik weiss, Spiegelschrank Strukturlaminat Eiche pale grain</li>
          <li>Armaturen: verchromt</li>
          <li>Waschtischmöbel: Strukturlaminat Eiche pale grain</li>
        </ul>
        <h3>Reduit</h3>
        <ul>
          <li>Bodenbeläge: Keramikplatten, taupe</li>
          <li>Wände: Weissputz</li>
          <li>Decke: Weissputz</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-6">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-8 sm:order-7">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-7 sm:order-8">
        <h3>Fenster/Verdunkelung/Sonnenstoren</h3>
        <ul>
          <li>Fenster: Holz/Metallfenster, 3-fach Isolierverglasung, Natur lasiert</li>
          <li>Verdunkelung: Rafflamellenstoren mit Elektroantrieb</li>
          <li>Sonnenstoren: Knick- und Fallarmmarkisen aus Stoff</li>
        </ul>
        <h3>Waschen / Trocknen</h3>
        <ul>
          <li>Jede Wohnung verfügt über eine Waschmaschine/Tumbler, Marke V-Zug Adora</li>
          <li>Gemeinschaftlich genutzter Trocknungsraum im UG</li>
        </ul>
        <h3>Keller / Tiefgarage</h3>
        <ul>
          <li>Pro Wohnung ein Kellerabteil</li>
          <li>52 Autoeinstellplätze (inkl. 16 Plätze mit E-Ladestation) sowie 12 Motorradplätze</li>
        </ul>
                    
      </x-layout.span>
      <x-layout.span class="order-9">
        <h3>Anlagen</h3>
        <strong>Elektroanlagen</strong><br>
        <ul>
          <li>Gegensprechanlage und elektrische Türöffnung</li>
          <li>Alle Wohn- und Schlafräume mit Steckdosen in genügender Anzahl</li>
          <li>Beleuchtung in Bad und Küche</li>
          <li>Beleuchtung in allg. Räumen, Umgebung usw.</li>
          <li>Photovoltaikanlage</li>
        </ul>
        <h3>Heizungsanlagen</h3>
        <ul>
          <li>Sole/Wasser-Wärmepumpe, Beheizung mittels Fussbodenheizung</li>
          <li>Freecooling (Absenkung der Raumtemperatur im Sommer um 1–2° möglich)</li>
        </ul>
        <h3>Lüftungsanlagen</h3>
        <ul>
          <li>Mechanische Lüftung bei innenliegenden Nasszellen und Reduit sowie Keller</li>
        </ul>
        <h3>Liftanlagen</h3>
        <ul>
          <li>Pro Haus ein Personenaufzug für max. 8 Personen vorhanden. Nutzplast 630 kg. Rollstuhlgängig</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-10">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-12 sm:order-11">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-11 sm:order-12">
        <h3>Aussenfläche/Umgebung</h3>
        <strong>Aussenfläche</strong><br>
        <ul>
          <li>Bodenbelag Sitzplatz: Feinsteinzeugplatten</li>
          <li>Bodenbelag Loggia: Feinsteinzeugplatten</li>
          <li>Deckenleuchte und Steckdose vorhanden</li>
        </ul>
        <h3>Umgebung</h3>
        <ul>
          <li>Begrünte Aussenanlage mit Aufenthalts- und Spielplätzen</li>
        </ul>
                    
      </x-layout.span>
    </x-layout.grid>
    <div class="mt-24 lg:mt-32">*Änderungen vorbehalten</div>
    <div class="mt-20 lg:mt-32">
      <a href="" title="Download Kurzbaubeschrieb (PDF)" target="_blank" class="bg-olive font-semi inline-flex text-white py-12 px-12 leading-none hover:bg-serene transition-colors">
        Kurzbaubeschrieb
      </a>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection