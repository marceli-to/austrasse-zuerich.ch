<section data-cart class="hidden px-20 lg:px-40 py-20 xl:py-40 fixed bottom-0 left-0 w-full min-h-[100px] bg-white z-[20000] shadow-top">
  <x-layout.inner class="relative">
    <a href="javascript:;" 
      class="no-underline block absolute top-0 right-0 p-8 -mt-4 -mr-4"
      data-cart-hide>
      <x-icons.chevron-down-lg class="w-24 xl:w-32" />
    </a>
    <h3 class="mb-12 xl:mb-16">Ihre Auswahl</h3>
    <div class="sm:grid sm:grid-cols-12 sm:gap-24 lg:gap-32">
      <div class="sm:col-span-12 md:col-span-12 lg:col-span-8 2xl:col-span-9 max-w-3xl">
        <table class="w-full text-xs xl:text-sm" data-cart-table>
          <thead>
            <tr class="[&>th]:pb-6 [&>th]:pr-6 xs:[&>th]:pr-8 [&>th]:align-middle [&>th]:text-left [&>th]:leading-[1rem] [&>th]:w-auto [&>th]:font-semi [&>th]:font-normal border-b border-olive">
              <th>Nr.</th>
              <th>Etage</th>
              <th>Zi</th>
              <th>HNF m<sup>2</sup></th>
              <th class="!text-right !pr-10">Netto MZ/Mt.</th>
              <th class="!text-right !pr-10">NK</th>
              <th class="!text-right !pr-18">Brutto MZ/Mt.</th>
              <th class="text-center">Grundriss</th>
              <th class="!text-right !pr-0">Anmeldung</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <div class="mt-24 flex gap-x-16 lg:gap-x-24 text-sm xl:text-base leading-none">
          <a 
            href="javascript:;" 
            class="no-underline hover:underline hover:underline-offset-4"
            data-cart-clear>
            Auswahl löschen
          </a>
          <a 
            href="javascript:;" 
            class="no-underline hover:underline hover:underline-offset-4 font-semi font-normal"
            data-cart-hide>
            Auswahl verbergen
          </a>
        </div>
      </div>
    </div>
  </x-layout.inner>
</section>