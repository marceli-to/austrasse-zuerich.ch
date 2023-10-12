@props(['apartments', 'building', 'classHeader' => ''])
<table class="border-t-2 border-olive w-full text-xs xl:text-sm mt-8" data-apartments>
  <x-apartments.thead class="{{$classHeader}}" />
  <x-apartments.tbody :apartments="$apartments" :building="$building" />
</table>