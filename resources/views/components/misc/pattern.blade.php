@props(['lines'])
<div class="relative">
  <div class="flex absolute h-full w-auto">
    @for ($i = 0; $i < $lines; $i++)
      <div class="block h-full w-3 md:w-6 lg:w-8 {{ $i%2 == 0 ? 'bg-serene' : 'bg-olive' }}"></div>
    @endfor
  </div>
  {{ $slot }}
</div>