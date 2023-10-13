@props(['type' => 'apartment'])
<section data-cart="{{ $type }}" class="group hidden px-20 lg:px-40 py-20 fixed bottom-0 left-0 w-full bg-white z-[400] shadow-top">
  <x-layout.inner class="relative">
    <a href="javascript:;" 
      class="no-underline block absolute top-0 right-0 p-8 -mt-4 -mr-4"
      data-cart-toggle>
      <x-icons.chevron-down-lg class="w-20 xl:w-24 group-[.is-minimized]:rotate-180" />
    </a>
    <h3 class="mb-12 xl:mb-16 group-[.is-minimized]:invisible">Ihre Auswahl</h3>
    <div class="group-[.is-minimized]:hidden sm:grid sm:grid-cols-12 sm:gap-24 lg:gap-32">
      <div class="sm:col-span-12 md:col-span-12 lg:col-span-9 2xl:col-span-10">
        <div class="max-h-[180px] overflow-auto pr-20" data-cart-table>
          <table class="w-full text-xs xl:text-sm">
            <thead>
              <tr class="[&>th]:pb-6 [&>th]:pr-6 xs:[&>th]:pr-8 [&>th]:align-middle [&>th]:text-left [&>th]:leading-[1rem] [&>th]:w-auto [&>th]:font-semi [&>th]:font-normal border-b border-olive">
                <th>Nr.</th>
                <th>Etage</th>
                @if ($type == 'apartment')
                  <th>Zi</th>
                @endif
                <th>HNF m<sup>2</sup></th>
                <th class="!text-right !pr-10">Netto MZ/{{ $type == 'commercial' ? 'Jahr' : 'Mt.' }}</th>
                <th class="!text-right !pr-10">NK</th>
                <th class="!text-right !pr-18">Brutto MZ/{{ $type == 'commercial' ? 'Jahr' : 'Mt.' }}</th>
                <th class="text-center">Grundriss</th>
                <th class="!text-right !pr-0">Anmeldung</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <div class="mt-24 flex gap-x-16 lg:gap-x-24 text-sm xl:text-base leading-none">
          <a 
            href="javascript:;" 
            class="no-underline hover:underline hover:decoration-1 hover:underline-offset-4"
            data-cart-clear>
            Auswahl löschen
          </a>
          <a 
            href="javascript:;" 
            class="no-underline hover:underline hover:decoration-1 hover:underline-offset-4 font-semi font-normal"
            data-cart-hide>
            Auswahl verbergen
          </a>
        </div>
      </div>
    </div>
  </x-layout.inner>
</section>