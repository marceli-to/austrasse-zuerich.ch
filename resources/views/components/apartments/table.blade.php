@props(['apartments', 'type' => 'living', 'building', 'classHeader' => ''])
<table class="border-t-2 border-olive w-full text-xs xl:text-sm mt-8" data-apartments>
  <x-apartments.thead 
    class="{{ $classHeader }}"
    :type="$type">
  </x-apartments.thead>
  <x-apartments.tbody 
    :apartments="$apartments" 
    :building="$building" 
    :type="$type">
  </x-apartments.tbody>
</table>
<div class="text-xs lg:text-sm leading-5 mt-20 lg:mt-20">
  <h3>Parking</h3>
  <p>Einstellplatz CHF 200.00/Mt.<br>Einstellplatz mit Ladestation CHF 245.00/Mt.<br>Motorradabstellplatz CHF 60.00/Mt.</p>
  <p>Bitte geben Sie bei der Anmeldung die gewünschte Anzahl Parkplätze an.</p>
</div>