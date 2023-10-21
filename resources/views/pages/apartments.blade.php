@extends('app')
@section('seo_title', 'Angebot')
@section('seo_description', 'Im Kreis 3 der Stadt Zürich entsteht zwischen dem historischen Kern von Alt-Wiedikon und der Binz die neue Wohnüberbauung «Austrasse», welche die Natur in die Stadt bringt. Verteilt auf mehrere Gebäudeteile (Austrasse 46 – 56 und Wiedingstrasse 87a-d) werden in drei Etappen Mietwohnungen und diverse Büro- und Gewerbeflächen realisiert. Das Wohnungsangebot reicht von der 1.5 – Zimmerwohnung bis hin zur grosszügigen 5.5 – Zimmerwohnung.')
@section('content')
<x-layout.section>
  <x-layout.inner>
    <h1>Angebot</h1>
    <x-apartments.filter />
  </x-layout.inner>
  @for ($i = 1; $i <= 3; $i++)
    <x-layout.inner class="{{ $i == 1 ? 'mt-25 md:mt-75' : 'mt-25 md:mt-50 lg:mt-75' }}" data-building-group="{{ $i }}">
      <x-layout.grid class="sm:!block md:!grid md:grid-cols-12 md:gap-24 lg:gap-32">
        <x-layout.span class="hidden md:block md:col-span-5 lg:col-span-5 2xl:col-span-6">
          <div class="md:sticky md:top-125">
            <x-apartments.iso.wrapper :number="$i" />
          </div>
        </x-layout.span>
        <x-layout.span class="md:col-span-7 lg:col-span-7 2xl:col-span-6 md:overflow-auto">
          <x-apartments.wrapper :number="$i" :address="$addresses['building_' . $i]">
            <x-apartments.table :apartments="$apartments['building_' . $i]" :building="$i" />
          </x-apartments.wrapper>
        </x-layout.span>
      </x-layout.grid>
    </x-layout.inner>
  @endfor
</x-layout.section>
<x-apartments.cart type="apartment" />
<x-apartments.show />
@endsection