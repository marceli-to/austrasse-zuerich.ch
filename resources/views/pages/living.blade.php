@extends('app')
@section('seo_title', 'Wohnungen')
@section('seo_description', 'Die Mietwohnungen der Überbauung Austrasse überzeugen mit spannenden Grundrissvarianten und attraktiven, privaten Aussenbereichen. Die Balkone und die rindenartige Keramikfassade übertragen das Waldthema in die Gebäude und lassen die Wohnbereiche fliessend in die Aussenräume übergehen. Beim Ausbau der Wohnungen wird auf langlebige, hochwertige Materialien geachtet.')
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
        <p>Zudem ist jede Wohnung mit einem eigenen Waschturm ausgestattet.</p>
      </x-layout.span>
      <x-layout.span>
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer_01-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer_01'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_kueche_schlafzimmer_06.jpg">
          <x-media.picture :image="'austrasse_zuerich_kueche_schlafzimmer_06'" :alt="'Austrasse Zürich – Wohnzimmer'" class="mt-20 lg:mt-40" />
        </a>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
<x-layout.section class="bg-white">
  <x-layout.inner>
    <a name="virtual-tour" class="scroll-mt-94 md:scroll-mt-[150px]"></a>
    <h2>Virtual Tour</h2>
    <x-layout.grid class="sm:grid sm:grid-cols-12 sm:gap-15">
      <x-layout.span class="mb-40 sm:!mb-0">
        <h3 class="mb-10">Virtual Staging</h3>
        <iframe class="w-full h-auto aspect-video" width="853" height="480" src="https://floorfy.com/de/tour/1966902" frameBorder="0" allowFullScreen allow="xr-spatial-tracking"></iframe>
        <a href="https://floorfy.com/de/tour/1966902" 
          target="_blank"
          class="block mt-10 text-sm lg:text-base xl:text-md underline decoration-1 underline-offset-2 hover:no-underline">
          In neuem Fenster öffnen
        </a>
      </x-layout.span>
      <x-layout.span>
        <h3 class="mb-10">360° Rundgang</h3>
        <iframe class="w-full h-auto aspect-video" width="853" height="480" src="https://my.matterport.com/show/?m=SxKC38kPgqC" frameBorder="0" allowFullScreen allow="xr-spatial-tracking"></iframe> 
        <a href="https://my.matterport.com/show/?m=SxKC38kPgqC"
          target="_blank"
          class="block mt-10 text-sm lg:text-base xl:text-md underline decoration-1 underline-offset-2 hover:no-underline">
          In neuem Fenster öffnen
      </a>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
<x-layout.section>
  <x-layout.inner>
    <a name="ausbau-wohnungen" class="scroll-mt-94 md:scroll-mt-[150px]"></a>
    <h2>Ausbau Wohnungen</h2>
    <x-layout.grid class="grid sm:gap-24 lg:gap-48">
      <x-layout.span class="order-1">
        <h3>Bodenbeläge</h3>
        <ul>
          <li>Riemenparkett Eiche</li>
          <li>Nasszellen Feinsteinzeugplatten Graubraun, matt</li>
        </ul>
        <h3>Wandbeläge + Decken</h3>
        <ul>
          <li>Raumhöhe in der Regel <strong>2.50m</strong> / im <strong>Erdgeschoss vom Haus 2</strong> (Austrasse 50 – 56) bis <strong>3.20m</strong></li>
          <li>Weissputz, weiss gestrichen</li>
          <li>Nasszellen: Steingutplatten</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-2">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_schlafzimmer_05-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_schlafzimmer_05'" :alt="'Austrasse Zürich – Schlafzimmer'" />
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
          <li>Kunstharzfronten seide</li>
          <li>Küchenabdeckung: Silestone Marengo</li>
          <li>Küchenrückwand: Wandschild WSP «Büttenweiss»</li>
          <li>Deckenleuchten: Aufbauleuchte LED rund</li> 
          <li>Geräte Marke Siemens: Induktionskochfeld, Dunstabzug, Geschirrspüler und Kühl-/ Gefriergerät. Teilweise Dampfgarer oder Steamer.</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-5">
        <h3>Badezimmer</h3>
        <ul>
          <li>Sanitärapparate: Keramik weiss</li>
          <li>Spiegelschrank mit LED und Steckdose</li>
          <li>Duschen mit Glastrennwand und/oder Badewanne</li>
          <li>Eigene Waschtürme in jeder Wohnung</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-6">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_badezimmer_02-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_badezimmer_02'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-8 sm:order-7">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_balkon-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_balkon'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-7 sm:order-8">
        <h3>Fenster</h3>
        <ul>
          <li>Holz/Metall-Fenster, 3-fach verglast, innen weiss, aussen Metall pulverbeschichtet</li>
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
        <h3>Elektroanlagen</h3>
        <ul>
          <li>Gegensprechanlage</li>
          <li>Küche und Korridor: LED Einbauspots</li>
          <li>Multimedia-Verteiler im Eingangsbereich</li>
          <li>Glasfaseranschluss - Internetangebot: EWZ (Swisscom) und Sunrise (UPC, Cablecom)</li>
          <li>Aussenfläche: Steckdose</li>
          <li>Photovoltaik-Anlage</li>
        </ul>      
        <h3>Heizungsanlagen</h3>
        <ul>
          <li>Bodenheizung</li>
          <li>Heizungstyp: Erdsonden Wärmepumpe</li>
          <li>Passive Kühlung im Sommer möglich</li>
        </ul>        
        <h3>Lüftungsanlagen</h3>
        <ul>
          <li>Wohnungsgrundlüftung</li>
          <li>Frischluftzufuhr über Aussenluftdurchlass über den Fenstern.</li>
        </ul>       
        <h3>Liftanlagen</h3>
        <ul>
          <li>Pro Haus ein Personenaufzug für max. 9 Personen, rollstuhlgängig</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-10">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_wohnzimmer_kueche-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_wohnzimmer_kueche'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-12 sm:order-11">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_badezimmer_03-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_badezimmer_03'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-11 sm:order-12">
        <h3>Keller</h3>
        <ul>
          <li>Pro Wohnung ein Kellerabteil, beleuchtet und mit Steckdose</li>
        </ul>
        <h3>Waschküche/Trocknungsraum</h3>
        <ul>
          <li>Jede Wohnung verfügt über eine Waschmaschine und einen Trockner</li>
          <li>Trocknungsraum im UG pro Haus mit Secomat</li>
        </ul>       
        <h3>Entsorgung</h3>
        <ul>
          <li>Entsorgung mittels Unterflurcontainer, Abstellflächen für Karton- und Zeitungslagerung vorhanden</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-[13]">
        <h3>Veloabstellplätze</h3>
        <ul>
          <li>Aussenabstellplätze und Veloräume mit zahlreichen Abstellplätzen teilweise mit Ladestationen für E-Bikes (Steckdosen)</li>
        </ul>
        <h3>Parking</h3>
        <ul>
          <li>126 Einstellhallenplätze</li>
          <li>1 Aussenabstellplatz / 2 Mobility Parkplätze</li>
          <li>20 Motorradeinstellplätze</li>
          <li>18 Besucherparkplätze in der Einstellhalle</li>
          <li>Einstellhalle bis max. 88 Einstellplätze mit Ladestationen möglich</li>
        </ul>
      </x-layout.span>
      <x-layout.span class="order-[14]">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_aussenvisualisierung-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_aussenvisualisierung'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-[16] sm:order-[15]">
        <a data-fancybox="gallery" href="/media/img/austrasse_zuerich_balkon_04-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_balkon_04'" :alt="'Austrasse Zürich – Wohnzimmer'" />
        </a>
      </x-layout.span>
      <x-layout.span class="order-[15] sm:order-[16]">
        <h3>Aussenfläche</h3>
        <ul>
          <li>Balkon Boden Betonplatte, Monobeton</li>
          <li>Balkongeländer: Hohlprofile und Streckmetall</li>
          <li>Balkontrennwände: Metallkonstruktion mit Alublech</li>
          <li>Wasseranschluss: Teilweise vorhanden</li>
        </ul>
        <h3>Umgebung</h3>
        <ul>
          <li>Begrünte Aussenanlage (Waldgarten), Sitzbänken, Spielplatz sowie Beltwalk um die komplette Überbauung</li>
        </ul>
      </x-layout.span>
    </x-layout.grid>

    <div class="mt-24 lg:mt-32">*Änderungen vorbehalten</div>
    <div class="mt-20 lg:mt-32">
      <p>
        Weitere detaillierte Ausführungen zum Ausbau finden Sie hier
      </p>
      <p>
        <a href="/media/austrasse_zuerich_kurzbaubeschrieb.pdf" 
          title="Download Kurzbaubeschrieb (PDF)" 
          target="_blank" 
          class="bg-olive font-semi font-normal inline-flex text-white py-12 px-12 leading-none hover:bg-serene transition-colors">
          Kurzbaubeschrieb
        </a>
      </p>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection