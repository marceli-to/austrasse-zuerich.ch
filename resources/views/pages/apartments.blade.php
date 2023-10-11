@extends('app')
@section('seo_title', 'Angebot')
@section('content')
<x-layout.section>
  <x-layout.inner>
    <h1>Angebot</h1>
    <x-apartments.filter />
  </x-layout.inner>
  @for ($i = 1; $i <= 3; $i++)
    <x-layout.inner class="{{ $i == 1 ? 'mt-0 md:mt-100' : 'mt-25 sm:mt-50 md:mt-125 lg:mt-150' }}" data-building-group="{{ $i }}">
      <x-layout.grid class="sm:!block md:!grid md:grid-cols-12 md:gap-24 lg:gap-32">
        <x-layout.span class="hidden md:block md:col-span-5 lg:col-span-5 2xl:col-span-6">
          <div class="md:sticky md:top-100">
            <x-apartments.iso.wrapper :number="$i" />
          </div>
        </x-layout.span>
        <x-layout.span class="md:col-span-7 lg:col-span-7 2xl:col-span-6 md:-mt-80 lg:-mt-100 md:overflow-auto">
          <x-apartments.wrapper :number="$i" :address="$addresses['building_' . $i]">
            <x-apartments.table :apartments="$apartments['building_' . $i]" :building="$i" />
          </x-apartments.wrapper>
        </x-layout.span>
      </x-layout.grid>
    </x-layout.inner>
  @endfor
</x-layout.section>

<div 
  data-apartment-show
  class="hidden sm:!hidden fixed w-full bottom-0 left-0 min-h-[150px] z-[20000] pt-16 pb-24 pl-20 pr-20 bg-white shadow-top text-olive text-sm">
  <h3 data-apartment-number class="!mb-0"></h3>
  <span data-apartment-info></span>
  <div class="mt-24 grid grid-cols-12 gap-x-24 items-end">
    @for ($i = 1; $i <= 3; $i++)
      <div data-apartment-iso="{{ $i }}" class="hidden col-span-8">
        <x-apartments.iso.wrapper :number="$i" size="sm" />
      </div>
      <div data-apartment-iso-preview="{{ $i }}" class="hidden col-span-3 col-start-10 flex justify-end">
        <x-apartments.iso.preview :number="$i" />
      </div>
    @endfor
  </div>
</div>
@endsection