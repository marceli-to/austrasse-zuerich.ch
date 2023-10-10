@props(['title' => '', 'index'])
<button 
  type="button" 
  {{ $attributes->merge(['class' => 'bg-serene font-semi font-normal text-olive w-full px-12 py-10 text-left']) }}
  @click="selected !== {{ $index }} ? selected = {{ $index }} : selected = null">
  <div class="flex items-center justify-between">
    <div>{{ $title }}</div>
    <template x-if="selected !== {{ $index }}">
      <x-icons.chevron-up class="text-olive" />
    </template>
    <template x-if="selected === {{ $index }}">
      <x-icons.chevron-down class="text-olive" />
    </template>
  </div>
</button>