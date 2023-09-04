@if (!Route::is('page.privacy') && !Route::is('page.imprint'))
<x-layout.section class="relative !p-0">
  <x-misc.map />
</x-layout.section>
@endif
<footer class="bg-olive leading-6">
  <x-layout.section>
    <x-layout.inner>
      <x-layout.grid>
        <x-layout.span class="sm:col-span-6 md:col-span-3">
          <h3 class="text-serene font-semi">Apleona Schweiz AG</h3>
          <p class="text-white">
            Industriestrasse 21<br>8304 Wallisellen
          </p>
        </x-layout.span>
        <x-layout.span class="sm:col-span-6 md:col-span-3">
          <nav class="text-white">
            <ul>
              <li>
                <a href="{{ route('page.imprint') }}" title="Impressum" class="{{ Route::is('page.imprint') ? 'text-serene' : '' }} hover:text-serene transition-colors">Impressum</a>
              </li>
              <li>
                <a href="{{ route('page.privacy') }}" title="Datenschutz" class="{{ Route::is('page.privacy') ? 'text-serene' : '' }} hover:text-serene transition-colors">Datenschutz</a>
              </li>
              <li>
                <a href="https://stoz.ch" target="_blank" title="stoz.ch" rel="noopener" class="hover:text-serene transition-colors">design by stoz</a>
              </li>
            </ul>
          </nav>
        </x-layout.span>
      </x-layout.grid>
    </x-layout.inner>
  </x-layout.section>
</footer>
@livewireScripts
<script src='https://api.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' rel='stylesheet' />
@vite('resources/js/app.js')
</body>
<!-- made with ❤ by stoz.ch & marceli.to -->
</html>