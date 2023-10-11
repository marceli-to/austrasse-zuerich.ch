@props(['number', 'address', 'iso' => ''])
<div class="flex gap-24 items-end sticky top-74 sm:top-0 pb-6 sm:pb-0 bg-serene w-full">
  <div class="shrink-0">
    <h2 class="text-base lg:text-md xl:text-lg !mb-0 leading-5 lg:leading-6">Haus {{ $number }}</h2>
  </div>
  <div class="shrink-0">
    <div>{{ $address }}</div>
  </div>
  <div class="w-full flex justify-end pt-4 sm:pt-0">
    <x-apartments.iso.preview :number="$number" />
  </div>
</div>
{{ $slot }}