@props(['apartments', 'building', 'showRooms' => true])
<tbody>
  @foreach($apartments as $apartment)
    <tr 
      data-apartment 
      data-number="{{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}"
      data-floor="{{ $apartment['floor'] ? config('apartment.floors_filter')[$apartment['floor']] : 'eg' }}"
      data-building="{{ $building }}"
      data-state="{{ $apartment['state'] }}"
      data-rooms="{{ $apartment['number_of_rooms'] == null ? 1 : $apartment['number_of_rooms'] }}"
      data-plan="/media/pdf/austrasse_zuerich_{{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}.pdf"
      data-form="https://flatfox.ch/de/listing{{ $apartment['short_url'] }}submit/"
      data-area="{{ $apartment['surface_living'] }}"
      data-detail-title="{{ $apartment['object_type'] == 'APARTMENT' ? 'Wohnung' : 'Gewerbeobjekt'}} {{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}"
      data-detail-floor="{{ $apartment['floor'] ? config('apartment.floors')[$apartment['floor']] : 'EG' }}"
      class="[&>td]:py-8 lg:[&>td]:py-6 [&>td]:pr-6 xs:[&>td]:pr-8 [&>td]:align-middle [&>td]:text-left border-b border-olive hover:cursor-pointer hover:bg-olive hover:bg-opacity-20 transition-all">
      <td>
        {{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}
      </td>
      <td>
        {{ $apartment['floor'] != null ? config('apartment.floors')[$apartment['floor']] : 'EG' }}
      </td>
      @if ($showRooms)
        <td>
          {{ $apartment['number_of_rooms'] == null ? 1 : $apartment['number_of_rooms'] }}
        </td>
      @endif
      <td class="!text-center">
        {{ $apartment['surface_usable'] ? $apartment['surface_usable'] : $apartment['surface_living'] }}
      </td>
      <td class="!text-right hidden xs:table-cell">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
          {{ number_format($apartment['rent_net'], 2, '.', '') }}
        @else
          –
        @endif
      </td>
      <td class="{{ $apartment['object_type'] == 'COMMERCIAL' ? '!text-center' : '!text-right' }} hidden xs:table-cell">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
          {{ $apartment['object_type'] == 'COMMERCIAL' ? '40.00' : number_format($apartment['rent_charges'], 2, '.', '') }}
        @else
          –
        @endif
      </td>
      <td class="!text-right hidden xs:table-cell xs:!pr-18">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
          {{ number_format(($apartment['rent_net'] + $apartment['rent_charges']), 2, '.', '') }}
        @else
          –
        @endif
      </td>

      <td class="!text-right xs:hidden xs:!pr-18">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
          {{ number_format(($apartment['rent_net'] + $apartment['rent_charges']), 2, '.', '') }}
        @else
          –
        @endif
      </td>

      <td class="!text-center !py-0 !pr-0 xs:!pr-8">
        @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
          <a 
            href="/media/pdf/austrasse_zuerich_{{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}.pdf" 
            target="_blank" 
            title="Download Grundriss Objekt Nr. {{ $apartment['ref_house'] }}.{{ $apartment['ref_object'] }}" 
            class="hidden xs:flex w-full h-full p-6 items-center justify-center">
            <x-icons.download class="-mt-1" />
          </a>
        @endif
      </td>
      <td class="!text-right !pr-0">
        <span class="hidden xs:block">
          @if (App\Helpers\ApartmentHelper::isAvailable($apartment))
            <a 
              href="https://flatfox.ch/de/listing{{ $apartment['short_url'] }}submit/" 
              target="_blank"
              title="Jetzt auf Flatfox anmelden"
              class="bg-gold py-4 px-6 text-white text-center text-xs leading-none rounded-sm font-semi font-normal hover:bg-olive transition-colors no-underline">
              Flatfox
            </a>
          @else
            {{ App\Helpers\ApartmentHelper::getState($apartment) }}
          @endif
        </span>
        <span class="block xs:hidden">
          <a 
            href="javascript:;" 
            title="Detail anzeigen"
            class="bg-gold py-4 px-6 text-white text-center text-xs leading-none rounded-sm font-semi font-normal hover:bg-olive transition-colors no-underline">
            Details
          </a>
        </span>
      </td>
    </tr>
  @endforeach
</tbody>
