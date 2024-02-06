@extends('app')
@section('seo_title', 'Kontakt')
@section('seo_description', 'Bei Fragen hilft Ihnen unser Q&A gerne weiter. Für Anmeldungen bitte unter Angebot entsprechende Wohnung auswählen und über Flatfox Ihre Bewerbung einreichen.')
@section('content')
<x-layout.section class="!p-0 flex-1">
  <x-misc.pattern class="hidden sm:block right-0 sm:w-[25%] md:w-[33.333%]" />
  <x-layout.inner class="px-20 lg:px-0 py-30 lg:py-50 relative z-10">
    <h1>Kontakt</h1>
    <x-layout.grid>
      <x-layout.span class="sm:!col-span-8">
        <p>
          <strong>Herzlichen Dank für Ihr Interesse</strong><br>
          Bei Fragen hilft Ihnen unser <a href="{{ route('page.qa') }}" title="Q&A" class="underline decoration-1 underline-offset-2 hover:no-underline">Q&A</a> gerne weiter.<br>Für Anmeldungen bitte unter <a href="{{ route('page.apartments') }}" title="Angeobt" class="underline decoration-1 underline-offset-2 hover:no-underline">Angebot</a> entsprechende Wohnung auswählen und über Flatfox Ihre Bewerbung einreichen.
        </p>
        @livewire('contact-form')
      </x-layout.span>
    </x-layout.grid>   
  </x-layout.inner>
</x-layout.section>

@endsection