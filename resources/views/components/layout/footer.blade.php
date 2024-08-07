@if (!Route::is('page.privacy') && !Route::is('page.imprint') && !Route::is('page.apartments') && !Route::is('page.gallery'))
<x-layout.section class="relative !p-0">
  <x-misc.map />
</x-layout.section>
@endif

@if (Route::is('page.apartments'))
<x-layout.section class="relative !p-0">
  <x-media.picture :image="'austrasse_zuerich_ansicht_oben'" :alt="'Austrasse Zürich – Vogelperspektive'" class="aspect-[16/9] 2xl:aspect-[16/8]" />
</x-layout.section>
@endif

<footer class="bg-olive leading-6 relative z-[200]">
  <x-layout.section>
    <x-layout.inner>
      <x-layout.grid>
        <x-layout.span class="sm:col-span-6 md:col-span-3">
          <div class="text-serene font-semi">Apleona Schweiz AG</div>
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
{{-- <script src='https://api.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js' defer></script> --}}
<link href='https://api.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' defer rel='stylesheet' />
@vite('resources/js/app.js')
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RWPD2SW544"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-RWPD2SW544');
</script>
</body>
<!-- made with ❤ by stoz.ch & marceli.to -->
</html>