@props(['title' => '', 'index'])
<button 
  type="button" 
  {{ $attributes->merge(['class' => 'bg-serene font-semi text-olive w-full px-12 py-10 text-left']) }}
  @click="selected !== {{ $index }} ? selected = {{ $index }} : selected = null">
  <div class="flex items-center justify-between">
    <div>{{ $title }}</div>
    <template x-if="selected !== {{ $index }}">
      <x-icons.chevron-up />
    </template>
    <template x-if="selected === {{ $index }}">
      <x-icons.chevron-down />
    </template>
  </div>
</button>