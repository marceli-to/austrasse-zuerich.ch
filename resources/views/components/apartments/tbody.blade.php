@props(['apartments', 'building'])
<tbody>
  @foreach($apartments as $apartment)
    <tr 
      data-apartment 
      data-number="{{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}"
      data-floor="{{ $apartment['floor'] ? config('apartment.floors_filter')[$apartment['floor']] : 'eg' }}"
      data-building="{{ $building }}"
      data-state=""
      data-rooms="{{ $apartment['number_of_rooms'] == null ? 1 : $apartment['number_of_rooms'] }}"
      data-plan=""
      data-form=""
      data-area="{{ $apartment['surface_living'] }}"
      data-detail-title="Wohnung {{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}"
      data-detail-floor="{{ $apartment['floor'] ? config('apartment.floors_filter')[$apartment['floor']] : 'EG' }}"
      class="[&>td]:py-6 [&>td]:pr-8 [&>td]:align-middle [&>td]:text-left border-b border-olive hover:cursor-pointer hover:bg-olive hover:bg-opacity-10 transition-all">
      <td>
        {{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}
      </td>
      <td>
        {{ $apartment['floor'] != null ? config('apartment.floors')[$apartment['floor']] : 'EG' }}
      </td>
      <td>
        {{ $apartment['number_of_rooms'] == null ? 1 : $apartment['number_of_rooms'] }}
      </td>
      <td>
        {{ $apartment['surface_living'] == null ? '–' : $apartment['surface_living'] }}
      </td>
      <td class="!text-right">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
          {{ number_format($apartment['rent_net'], 2, '.', '') }}
        @else
          –
        @endif
      </td>
      <td class="!text-right">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
          {{ number_format($apartment['rent_charges'], 2, '.', '') }}
        @else
          –
        @endif
      </td>
      <td class="!text-right !pr-18">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
          {{ number_format(($apartment['rent_net'] + $apartment['rent_charges']), 2, '.', '') }}
        @else
          –
        @endif
      </td>
      <td class="!text-center !py-0">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
          <a href="" title="Download Grundriss Objekt Nr. {{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}" class="w-full h-full p-6 flex items-center justify-center">
            <x-icons.download class="-mt-1" />
          </a>
        @endif
      </td>
      <td class="!text-right !pr-0">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
        <a 
          href="https://flatfox.ch/de/listing{{ $apartment['short_url'] }}submit/" 
          target="_blank"
          class="font-semi font-semibold hover:underline hover:underline-offset-2">
          Flatfox
        </a>
        @else
          {{ App\Helpers\ApartmentHelper::getState($apartment) }}
        @endif
      </td>
    </tr>
  @endforeach
</tbody>
