@extends('app')
@section('seo_title', 'Angebot')
@section('content')
<x-layout.section>
  <x-layout.inner>
    <h1>Angebot</h1>
    <form>
      <x-layout.grid class="lg:!gap-y-24">
        
        <x-layout.span class="sm:!col-span-6 lg:!col-span-3">
          <x-form.label>Verfügbarkeit</x-form.label>
          <div>
            <x-form.select class="js-filter-select" data-filter-type="state">
              <option value="NULL">Alle Wohnungen</option>
              <option value="free">frei</option>
              <option value="rented">reserviert</option>
              <option value="reserved">vermietet</option>
            </x-form.select>
          </div>
        </x-layout.span>
        
        <x-layout.span class="sm:!col-span-6 lg:!col-span-3">
          <x-form.label>Zimmer</x-form.label>
          <div>
            <x-form.select class="js-filter-select" data-filter-type="rooms">
              <option value="NULL">Alle Zimmer</option>
              <option value="2.5">2.5</option>
              <option value="3.5">3.5</option>
              <option value="4.5">4.5</option>
              <option value="5.5">5.5</option>
            </x-form.select>
          </div>
        </x-layout.span>
        
        <x-layout.span class="sm:!col-span-6 lg:!col-span-3">
          <x-form.label>Haus</x-form.label>
          <div>
            <x-form.select class="js-filter-select" data-filter-type="building">
              <option value="NULL">Alle Häuser</option>
              <option value="a">A</option>
              <option value="b">B</option>
              <option value="c">C</option>
              <option value="d">D</option>
              <option value="e">E</option>
            </x-form.select>
          </div>
        </x-layout.span>

        <x-layout.span class="sm:!col-span-6 lg:!col-span-3">
          <x-form.label>Etage</x-form.label>
          <div>
            <x-form.select class="js-filter-select" data-filter-type="floor">
              <option value="NULL">Alle Etagen</option>
              <option value="eg">EG</option>
              <option value="1.og">1. OG</option>
              <option value="2.og">2. OG</option>
              <option value="3.og">3. OG</option>
            </x-form.select>
          </div>
        </x-layout.span>
        
        <x-layout.span class="mt-32 sm:mt-8 md:mt-0 sm:!col-span-6 lg:!col-span-3">
          <x-form.button class="js-btn-reset bg-sage hover:bg-white hover:text-olive transition-all w-full">
            Filter zurücksetzen
          </x-form.button>
        </x-layout.span>

      </x-layout.grid>
    </form>
  </x-layout.inner>
</x-layout.section>
@endsection