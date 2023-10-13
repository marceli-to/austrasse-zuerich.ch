@props(['index'])
<div 
  data-qa-index="{{ $index }}"
  {{ $attributes->merge(['class' => 'relative border border-serene mb-12 md:mb-24']) }}>
  {{ $slot }}
</div>