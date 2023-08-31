@props(['image', 'alt' => ''])
<picture>
  <source media="(min-width: 768px)" srcset="/media/img/{{ $image }}.jpg">
  <source srcset="/media/img/{{ $image }}-sm.jpg">
  <img src="/media/img/{{ $image }}-sm.jpg" alt="{{ $alt }}" title="{{ $alt }}" height="1600" width="1050" class="w-full aspect-[16/8] md:aspect-[16/7] lg:aspect-[16/6] object-cover">
</picture>