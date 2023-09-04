@extends('app')
@section('seo_title', 'Gewerbe')
@section('content')
<x-layout.section class="bg-serene !p-0">
  <x-misc.pattern class="hidden sm:block right-0 sm:w-[25%] md:w-[33.333%]" />
  <x-layout.inner class="px-20 lg:px-0 py-30 lg:py-50 relative z-10">
    <h1>Gewerbe</h1>
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
        <a data-fancybox href="/media/img/austrasse_zuerich_balkon-lg.jpg">
          <x-media.picture :image="'austrasse_zuerich_eingang'" :alt="'Austrasse Zürich – Eingang'" />
        </a>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
<x-layout.section>
  <x-layout.inner>
    <div>
      <h2>Kontakt</h2>
      <p>Haben wir Ihr Interesse geweckt?<br>Gerne stehen wir für Fragen zur Verfügung und freuen uns auf Ihre Kontaktaufnahme.</p>
      <p><strong>Hinweis:</strong> Dieses Kontaktformular wird ausschliesslich für gewerbliche Anfragen verwendet. Wohnungsanfragen werden nicht berücksichtigt.</p>
      @livewire('create-inquiry')
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection