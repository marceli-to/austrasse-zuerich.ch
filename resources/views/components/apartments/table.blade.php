@props(['apartments', 'building'])
<table class="border-t-2 border-olive w-full text-xs xl:text-sm mt-8" data-apartments>
  <x-apartments.thead />
  <x-apartments.tbody :apartments="$apartments" :building="$building" />
</table>