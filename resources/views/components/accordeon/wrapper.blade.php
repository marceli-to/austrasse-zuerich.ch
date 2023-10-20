@props(['index'])
<div 
  data-qa-index="{{ $index }}"
  {{ $attributes->merge(['class' => 'relative border border-serene mb-12 md:mb-24 scroll-mt-94 md:scroll-mt-[150px]']) }}>
  {{ $slot }}
</div>