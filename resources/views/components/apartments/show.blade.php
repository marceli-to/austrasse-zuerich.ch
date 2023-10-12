<div 
  data-apartment-show
  class="hidden sm:!hidden fixed w-full bottom-0 left-0 min-h-[150px] z-[20000] pt-16 pb-24 pl-20 pr-20 bg-white shadow-top text-olive text-base">
  <div class="relative">
    <a href="javascript:;" class="absolute top-0 right-0 -mt-2 -mr-2 p-4" data-apartment-close>
      <x-icons.cross class="w-18 h-auto" strokeWidth="2" />
    </a>
    <h3 data-apartment-number class="!mb-4"></h3>
    <span data-apartment-info></span>
    <div class="mt-32 grid grid-cols-12 gap-x-24 items-end">
      @for ($i = 1; $i <= 3; $i++)
        <div data-apartment-iso="{{ $i }}" class="hidden col-span-8">
          <x-apartments.iso.wrapper :number="$i" size="sm" />
        </div>
        <div data-apartment-iso-preview="{{ $i }}" class="hidden col-span-3 col-start-10 flex justify-end">
          <x-apartments.iso.preview :number="$i" />
        </div>
      @endfor
    </div>
  </div>
</div>