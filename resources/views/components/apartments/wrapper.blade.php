@props(['number', 'address', 'iso' => ''])
<div class="flex gap-24 items-end">
  <div class="shrink-0">
    <h2 class="text-base lg:text-md xl:text-lg !mb-0 leading-5 lg:leading-6">Haus {{ $number }}</h2>
  </div>
  <div class="shrink-0">
    <div>{{ $address }}</div>
  </div>
  <div class="w-full flex justify-end">
    <x-apartments.iso.preview :number="$number" />
  </div>
</div>
{{ $slot }}