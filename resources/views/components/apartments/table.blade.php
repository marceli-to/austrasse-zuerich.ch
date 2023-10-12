@props(['apartments', 'building', 'showRooms' => true, 'paymentInterval' => 'Mt.', 'classHeader' => ''])
<table class="border-t-2 border-olive w-full text-xs xl:text-sm mt-8" data-apartments>
  <x-apartments.thead 
    class="{{$classHeader}}"
    :showRooms="$showRooms"
    :paymentInterval="$paymentInterval">
  </x-apartments.thead>
  <x-apartments.tbody 
    :apartments="$apartments" 
    :building="$building" 
    :showRooms="$showRooms">
  </x-apartments.tbody>
</table>