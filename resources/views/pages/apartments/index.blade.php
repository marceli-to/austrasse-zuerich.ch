@extends('app')
@section('seo_title', 'Angebot')
@section('content')
<x-layout.section>
  <x-layout.inner>
    <h1>Angebot</h1>
    <x-apartments.filter />
  </x-layout.inner>
  @for ($i = 1; $i <= 3; $i++)
    <x-layout.inner class="mt-50 md:mt-100 {{ $i == 1 ? 'lg:mt-95' : 'lg:mt-145' }}" data-building-group="{{ $i }}">
      <x-layout.grid class="sm:!block md:!grid md:grid-cols-12 md:gap-24 lg:gap-32">
        <x-layout.span class="hidden md:block md:col-span-4 lg:col-span-5 xl:col-span-6">
          <div class="md:sticky md:top-150">
            <x-apartments.iso.wrapper :number="$i" />
          </div>
        </x-layout.span>
        <x-layout.span class="md:col-span-8 lg:col-span-7 xl:col-span-6 md:-mt-80 lg:-mt-100">
          <x-apartments.wrapper :number="$i" :address="$addresses['building_' . $i]">
            <x-apartments.table :apartments="$apartments['building_' . $i]" :building="$i" />
          </x-apartments.wrapper>
        </x-layout.span>
      </x-layout.grid>
    </x-layout.inner>
  @endfor
</x-layout.section>
@endsection