@extends('app')
@section('seo_title', 'Wohnungen')
@section('content')
<x-layout.section class="!p-0">
  <x-misc.pattern class="hidden sm:block right-0 sm:w-[20%] xl:w-[25%]" />
  <x-layout.inner class="px-20 lg:px-0 py-30 lg:py-50 relative z-10">
    <h1>Wohnungen</h1>
    <x-layout.grid>
      <x-layout.span class="hyphens-auto">
        <p>Die Mietwohnungen der Überbauung Austrasse überzeugen mit spannenden Grundrissvarianten und attraktiven, privaten Aussenbereichen. Die Balkone und die rindenartige Keramikfassade übertragen das Waldthema in die Gebäude und lassen die Wohnbereiche fliessend in die Aussenräume übergehen. Beim Ausbau der Wohnungen wird auf langlebige, hochwertige Materialien geachtet.</p>
        <p>Der Ausbaustandard zieht sich durch die gesamte Überbauung. Durch die gewählten Farben und Materialien entsteht ein einheitliches Zusammenspiel zwischen Innen- und Aussenraum.</p>
        <p>Die modernen Küchen mit wertigen Elektrogeräten lassen keine Wünsche offen. Dank der Vielfältigkeit der verschiedenen Küchenarten, welche sich von Wohnung zu Wohnung unterscheiden, findet jeder die passende Küche für sich.</p>
        <p>Ein harmonisches Wohngefühl wird dem Wohn-/Essbereich sowie den Schlafzimmern mit einem parallel verlegten Riemenparkett (Eiche) verliehen. Jede Wohnung verfügt zudem über einen Sitzplatz oder Balkon. Ein Grossteil der Wohnungen geniessen den Luxus von zwei Balkonen, welche sich direkt vom Wohn- oder Essbereich oder gar von den Schlafzimmern aus betreten lassen.</p>
        <p>Die modernen Bäder sind mit glasierten Steingutplatten ausgestattet und verfügen über bodenebene Duschen oder eine Badewanne.</p>
        <p>Zudem ist jede Wohnung mit einem eigenen Waschturm, welcher sich in einem Einbauschrank in den Badezimmern befindet, ausgestattet.</p>
      </x-layout.span>
      <x-layout.span>
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer_01-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer_01'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_schlafzimmer_05-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_schlafzimmer_05'" :alt="'Austrasse Zürich – Schlafzimmer'" class="mt-20 lg:mt-40" />
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
        <h3>Bodenbeläge</h3>
        <ul>
          <li>Riemenparkett (Bauwerk Monopark) Eiche, matt versiegelt, parallel verlegt</li>
          <li>Nasszellen Feinsteinzeugplatten, unglasiert, Cinza – (Graubraun), matt</li>
        </ul>
        <h3>Wandbeläge + Decken</h3>
        <ul>
          <li>Weissputz, weiss gestrichen</li>
          <li>Nasszellen: Steingutplatten glasiert, Pergamo, glänzend</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-2">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_kueche_schlafzimmer_06.jpg">
          <x-media.picture :image="'austrasse_zuerich_kueche_schlafzimmer_06'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-4 sm:order-3">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_essbereich_kueche_07-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_essbereich_kueche_07'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-3 sm:order-4">
        <h3>Küche</h3>
        <ul>
          <li>Einbauten: Küchenfronten Kunstharzfronten, Hochschränke und Kücheninseln, Oberschränke Trendino QD, seide</li>
          <li>Küchenabdeckung: Silestone Marengo (Hybridoberfläche), poliert, Farbton</li>
          <li>Küchenrückwand: Wandschild WSP «Büttenweiss»</li>
          <li>Deckenleuchten: Aufbauleuchte LED rund</li>
          <li>Geräte Marke Siemens: Allgemein: Induktionskochfeld, Dunstabzug (bei Wohnungen mit Kochinseln integriert in Kochfeld), Geschirrspüler und Kühl-/ Gefriergerät 1.5 – Zimmer-Wohnungen mit Einbaubackofen, 2.5 und 3.5 Zimmer-Wohnungen in den obersten zwei Geschossen mit Dampfbackofen; in allen anderen Geschossen mit Einbaubackofen, 4.5 und 5.5 Zimmer-Wohnungen in den obersten zwei Geschossen mit Einbaubackofen und Dampfgarer; in allen anderen Geschossen mit Einbaubackofen</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-5">
        <h3>Badezimmer</h3>
        <ul>
          <li>Sanitärapparate: Keramik weiss</li>
          <li>Armaturen: Verchromt</li>
          <li>Spiegelschrank: weiss mit LED-Beleuchtung und Steckdose</li>
          <li>Duschen mit Glastrennwand</li>
          <li>Badheizkörper weiss (gekoppelt mit Bodenheizung)</li>
          <li>Einbauschränke (Waschtürme): Kunstharzbeschichtet, weiss</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-6">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_badezimmer_02-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_badezimmer_02'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-8 sm:order-7">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-7 sm:order-8">
        <h3>Fenster</h3>
        <ul>
          <li>Holz/Metall-Fenster, 3-fach verglast, innen weiss, aussen Metall pulverbeschichtet </li>
        </ul>
        <h3>Verdunkelung</h3>
        <ul>
          <li>Alu-Rafflamellenstoren, (Grauton), elektrisch</li>
          <li>Vorhangschienen in Küche/Wohnzimmer Einzelschienen, in allen Schlafzimmer doppelt</li>
        </ul>
        <h3>Sonnenschutz</h3>
        <ul>
          <li>Balkone Stoffmarkisen Merlot mit Handkurbel</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-9">
        <h3>Anlagen</h3>
        <strong>Elektroanlagen</strong><br>
        <ul>
          <li>Videogegensprechanlage und elektrische Türöffnung</li>
          <li>Alle Wohn- und Schlafräume mit Steckdosen und Lampenstellen in genügender Anzahl.</li>
          <li>Küche und Korridor: LED Einbauspots</li>
          <li>Multimedia-Verteiler im Eingangsbereich</li>
          <li>Wohnzimmer: ausgebaute Multimedia-Dose inkl. Glasfaseranschluss</li>
          <li>Grosses Schlafzimmer: ausgebaute Multimedia-Dose</li>
          <li>Übrige Zimmer: Leerrohre mit Blindabdeckung</li>
          <li>Internetangebot: EWZ (Swisscom) und Sunrise (UPC, Cablecom)</li>
          <li>Aussenfläche: Steckdose</li>
        </ul>
        <h3>Heizungsanlagen</h3>
        <ul>
          <li>Beheizung mittels Bodenheizung in den Nasszellen zusätzlich über Badheizkörper</li>
          <li>Erdsonden Wärmepumpe / Passive Kühlung im Sommer möglich</li>
        </ul>
        <h3>Lüftungsanlagen</h3>
        <ul>
          <li>Wohnungsgrundlüftung über zentrale Abluft (Küche und Nasszellen) über Dach. Frischluftzufuhr über Aussenluftdurchlass über den Fenstern.</li>
        </ul>
        <h3>Liftanlagen</h3>
        <ul>
          <li>Pro Haus ein Personenaufzug für max. 9 Personen. Nutzlast 675 kg, rollstuhlgängig</li>
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
        <h3>Keller</h3>
        <ul>
          <li>Pro Wohnung ein Kellerabteil, beleuchtet und mit Steckdose auf Wohnungszähler, Schliessung mit Zylinder auf Wohnungsschliessung</li>
        </ul>
        <h3>Waschküche / Trocknungsraum</h3>
        <ul>
          <li>Jede Wohnung verfügt über eine Waschmaschine und einen Trockner, Marke Electrolux</li>
          <li>Trocknungsraum im UG pro Haus mit Secomat</li>
        </ul>
        <h3>Entsorgung</h3>
        <ul>
          <li>4 Unterflurcontainer in der Überbauung, Abstellflächen für Karton- und Zeitungslagerung vorhanden, 3 Grünabfallbehälter</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-[13]">
        <h3>Veloabstellplätze</h3>
        <ul>
          <li>Aussenabstellplätze, Veloräume mit zahlreichen Abstellplätzen teilweise mit Ladestationen für E-Bikes (Steckdosen)</li>
        </ul>
        <h3>Parking</h3>
        <ul>
          <li>126 Einstellhallenplätze</li>
          <li>3 Aussenabstellplätze für Mobility</li>
          <li>20 Motorradeinstellplätze</li>
          <li>18 Besucherparkplätze in der Einstellhalle</li>
          <li>Einstellhalle bis max. 88 Einstellplätze mit Ladestationen möglich</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-[14]">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-[16] sm:order-[15]">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_balkon_04-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_balkon_04'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-[15] sm:order-[16]">
        <h3>Aussenfläche/Umgebung</h3>
        <strong>Aussenfläche</strong><br>
        <ul>
          <li>Boden Balkon, Betonplatte, Monobeton, sicht</li>
          <li>Balkongeländer: Hohlprofile und Streckmetall, pulverbeschichtet</li>
          <li>Wasseranschluss: Dachterrassen in Haus 1 und 2 je einen Wasseranschluss auf Terrasse, Attikageschosse in Haus 3 je einen Wasseranschluss auf der Terrasse</li>
        </ul>
        <h3>Umgebung</h3>
        <ul>
          <li>Begrünte Aussenanlage (Waldgarten) mit Brunnen, Sitzbänken, Spielplatz sowie Beltwalk um die komplette Überbauung </li>
        </ul>
      </x-layout.span>
    </x-layout.grid>


    <div class="mt-24 lg:mt-32">*Änderungen vorbehalten</div>
    <div class="mt-20 lg:mt-32">
      <a href="" title="Download Kurzbaubeschrieb (PDF)" target="_blank" class="bg-olive font-semi font-normal inline-flex text-white py-12 px-12 leading-none hover:bg-serene transition-colors">
        Kurzbaubeschrieb
      </a>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection