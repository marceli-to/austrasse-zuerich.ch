@props(['number', 'size' => 'lg'])
@if ($number == 1)
  <x-apartments.iso.buildings.1 data-iso="{{ $size }}" />
  <x-apartments.iso.maps.1 />
@endif
@if ($number == 2)
  <x-apartments.iso.buildings.2 data-iso="{{ $size }}" />
  <x-apartments.iso.maps.2 />
@endif
@if ($number == 3)
  <x-apartments.iso.buildings.3 data-iso="{{ $size }}" />
  <x-apartments.iso.maps.3 />
@endif