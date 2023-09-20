@extends('app')
@section('seo_title', 'Q&A')
@section('content')
<div x-data="{ selected: 0 }">
  <x-layout.section class="!p-0">
    <x-misc.pattern class="hidden sm:block right-0 sm:w-[25%] md:w-[33.333%]" />
    <x-layout.inner class="px-20 lg:px-0 py-30 lg:py-50 relative z-10">
      <h1>Wobei können wir Ihnen helfen?</h1>
      <div class="mt-20 lg:mt-32 flex gap-12 md:gap-24">
        <x-accordeon.shortcut :title="'Bewerbung'" :index="1" />
        <x-accordeon.shortcut :title="'Haustiere'" :index="2" />
        <x-accordeon.shortcut :title="'Ausbau'" :index="4" />
        <x-accordeon.shortcut :title="'Umgebung'" :index="6" />
      </div>
    </x-layout.inner>
  </x-layout.section>
  <x-layout.section class="bg-white">
    <x-layout.inner>

      <x-accordeon.wrapper :index="1">
        <x-accordeon.button :title="'Bewerbung'" :index="1" />
        <x-accordeon.section :index="1">
          <x-accordeon.item>
            <x-slot name="question">Wie bewerbe ich mich?</x-slot>
            <x-slot name="answer">Über unser Flatfox-Portal.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Wann bekomme ich eine Antwort?</x-slot>
            <x-slot name="answer">In ca. 2 Wochen</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="2">
        <x-accordeon.button :title="'Haustiere'" :index="2" />
        <x-accordeon.section :index="2">
          <x-accordeon.item>
            <x-slot name="question">Sind Haustiere erlaubt?</x-slot>
            <x-slot name="answer">Ja, sofern diese Stubenrein sind.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Welche Haustiere sind erlaubt?</x-slot>
            <x-slot name="answer">Alle Tiere die eine grösse von 2 x 2 Meter nicht übersteigen.</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="3">
        <x-accordeon.button :title="'Grundrisse'" :index="3" />
        <x-accordeon.section :index="3">
          <x-accordeon.item>
            <x-slot name="question">Sind Haustiere erlaubt?</x-slot>
            <x-slot name="answer">Ja, sofern diese Stubenrein sind.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Welche Haustiere sind erlaubt?</x-slot>
            <x-slot name="answer">Alle Tiere die eine grösse von 2 x 2 Meter nicht übersteigen.</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="4">
        <x-accordeon.button :title="'Ausbau'" :index="4" />
        <x-accordeon.section :index="4">
          <x-accordeon.item>
            <x-slot name="question">Sind Haustiere erlaubt?</x-slot>
            <x-slot name="answer">Ja, sofern diese Stubenrein sind.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Welche Haustiere sind erlaubt?</x-slot>
            <x-slot name="answer">Alle Tiere die eine grösse von 2 x 2 Meter nicht übersteigen.</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="5">
        <x-accordeon.button :title="'Gewerbefläche'" :index="5" />
        <x-accordeon.section :index="5">
          <x-accordeon.item>
            <x-slot name="question">Sind Haustiere erlaubt?</x-slot>
            <x-slot name="answer">Ja, sofern diese Stubenrein sind.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Welche Haustiere sind erlaubt?</x-slot>
            <x-slot name="answer">Alle Tiere die eine grösse von 2 x 2 Meter nicht übersteigen.</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="6">
        <x-accordeon.button :title="'Umgebung'" :index="6" />
        <x-accordeon.section :index="6">
          <x-accordeon.item>
            <x-slot name="question">Sind Haustiere erlaubt?</x-slot>
            <x-slot name="answer">Ja, sofern diese Stubenrein sind.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Welche Haustiere sind erlaubt?</x-slot>
            <x-slot name="answer">Alle Tiere die eine grösse von 2 x 2 Meter nicht übersteigen.</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

    </x-layout.inner>
  </x-layout.section>
</div>
@endsection