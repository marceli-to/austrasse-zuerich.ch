@props(['number', 'address', 'iso' => ''])
<div {{ $attributes->merge(['class' => 'sticky top-74 z-5 md:top-0 pt-10 md:pt-0 pb-6 md:pb-0 bg-serene w-full'])}}>
  <div class="flex gap-24 items-end">
    <div class="shrink-0">
      <h2 class="text-base lg:text-md xl:text-lg !mb-0 leading-5 lg:leading-6">
        Haus {{ $number }}
      </h2>
    </div>
    <div class="grow">
      <div>{{ $address }}</div>
    </div>
  </div>
  <div class="text-xs xl:text-sm">
    Alle Mietzinse in CHF
  </div>
</div>


{{ $slot }}