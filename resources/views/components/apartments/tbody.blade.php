@props(['apartments', 'building'])
<tbody>

  {{-- <th>Nr.</th>
  <th>Etage</th>
  <th>Zi</th>
  <th>HNF/m<sup>2</sup></th>
  <th>Netto MZ pro Monat</th>
  <th class="!text-right">NK</th>
  <th>Brutto MZ pro Monat</th>
  <th>Grundriss</th>
  <th class="!text-right !pr-0">Anmeldung</th>
  
  <tr data-iso-list-item="" 
    data-number="3a00.01" 
    data-floor="eg" 
    data-building="a" 
    data-state="reserved" 
    data-rooms="5.5" 
    data-plan="/assets/media/nidum-sempach-3a00.01.pdf" 
    data-form="#" 
    data-area="122" 
    data-detail-title="3a 00.01" 
    data-detail-floor="EG">
  </tr>
  
  
  --}}

  @foreach($apartments as $apartment)
    <tr 
      data-apartment 
      data-number="{{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}"
      data-floor="{{ config('apartment.floors_filter')[$apartment['floor']] }}"
      data-building="{{ $building }}"
      data-state=""
      data-rooms="{{ $apartment['number_of_rooms'] }}"
      data-plan=""
      data-form=""
      data-area="{{ $apartment['surface_living'] }}"
      data-detail-title="Wohnung {{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}"
      data-detail-floor="{{ config('apartment.floors')[$apartment['floor']] }}"
      class="[&>td]:py-6 [&>td]:pr-8 [&>td]:align-middle [&>td]:text-left border-b border-olive">
      <td>
        {{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}
      </td>
      <td>
        {{ config('apartment.floors')[$apartment['floor']] }}
      </td>
      <td>
        {{ $apartment['number_of_rooms'] }}
      </td>
      <td>
        {{ $apartment['surface_living'] }}
      </td>
      <td class="!text-right">
        {{ number_format($apartment['rent_net'], 2, '.', '') }}
      </td>
      <td class="!text-right">
        {{ number_format($apartment['rent_charges'], 2, '.', '') }}
      </td>
      <td class="!text-right !pr-18">
        {{ number_format(($apartment['rent_net'] + $apartment['rent_charges']), 2, '.', '') }}
      </td>
      <td class="!text-center !py-0">
        <a href="" title="Download Grundriss Objekt Nr. {{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}" class="w-full h-full p-6 flex items-center justify-center">
          <x-icons.download class="-mt-1" />
        </a>
      </td>
      <td class="!text-right !pr-0">
        <a 
          href="https://flatfox.ch/de/listing{{ $apartment['short_url'] }}submit/" 
          target="_blank"
          class="font-semi font-semibold hover:underline hover:underline-offset-2">
          Flatfox
        </a>
      </td>
    </tr>
  @endforeach
</tbody>
