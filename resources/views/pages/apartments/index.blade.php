@extends('app')
@section('seo_title', 'Angebot')
@section('content')
<x-layout.section>
  <x-layout.inner>
    <h1>Angebot</h1>
    @include('pages.apartments.filter')
  </x-layout.inner>
  
  <x-layout.inner class="mt-50" data-building-group="1">
    <x-layout.grid class="sm:!block md:!grid md:grid-cols-12 md:gap-24 lg:gap-32">
      <x-layout.span class="hidden md:block md:col-span-4 lg:col-span-5">
        [Isometrie]
      </x-layout.span>
      <x-layout.span class="md:col-span-8 lg:col-span-7">
        @include('pages.apartments.building_1', ['apartments' => $apartments['building_1']])
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>

  <x-layout.inner class="mt-50" data-building-group="2">
    <x-layout.grid class="sm:!block md:!grid md:grid-cols-12 md:gap-24 lg:gap-32">
      <x-layout.span class="hidden md:block md:col-span-4 lg:col-span-5">
        [Isometrie]
      </x-layout.span>
      <x-layout.span class="md:col-span-8 lg:col-span-7">
        @include('pages.apartments.building_2', ['apartments' => $apartments['building_2']])
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>

  <x-layout.inner class="mt-50" data-building-group="3">
    <x-layout.grid class="sm:!block md:!grid md:grid-cols-12 md:gap-24 lg:gap-32">
      <x-layout.span class="hidden md:block md:col-span-4 lg:col-span-5">
        [Isometrie]
      </x-layout.span>
      <x-layout.span class="md:col-span-8 lg:col-span-7">
        @include('pages.apartments.building_3', ['apartments' => $apartments['building_3']])
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>


</x-layout.section>
@endsection