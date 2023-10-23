@props(['type'=> 'living'])
<thead {{ $attributes->merge(['class' => 'font-semi font-normal sticky top-120 md:relative md:top-0 bg-serene'])}}>
  <tr class="[&>th]:py-6 [&>th]:pr-6 xs:[&>th]:pr-8 [&>th]:align-middle [&>th]:text-left [&>th]:leading-[1rem] [&>th]:w-auto [&>th]:font-semi [&>th]:font-normal border-b border-olive">
    <th>Nr.</th>
    <th>Etage</th>
    @if ($type == 'living')
      <th>Zi</th>
    @endif
    <th class="">
      <span class="hidden xs:block">HNF m<sup>2</sup></span>
      <span class="xs:hidden">m<sup>2</sup></span> 
    </th>
    <th class="!text-right !pr-10 hidden xs:table-cell">
      {!! $type == 'living' ? 'Netto<br>MZ/Mt.' : 'Netto&nbsp;MZ<br>m<sup>2</sup>/Jahr' !!}
    </th>
    <th class="!text-right !pr-10 hidden xs:table-cell">
      NK{!! $type == 'living' ? '/Mt.' : '<br>m<sup>2</sup>/Jahr' !!}
    </th>
    <th class="!text-right !pr-18 hidden xs:table-cell">
      {!! $type == 'living' ? 'Brutto<br>MZ/Mt.' : 'Brutto&nbsp;MZ<br>m<sup>2</sup>/Jahr' !!}
    </th>
    <th class="!text-right xs:hidden">Brutto/{!! $type == 'living' ? 'Mt.' : 'm<sup>2</sup>/Jahr' !!}</th>
    <th class="text-center xs:text-left px-4 !pr-0 xs:!pr-8">
      <span class="hidden xs:block">Grundriss</span>
    </th>
    <th class="!text-right !pr-0">
      <span class="hidden xs:block">Anmeldung</span>
    </th>
  </tr>
</thead>