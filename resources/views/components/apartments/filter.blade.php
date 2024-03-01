<form>
  <x-layout.grid class="lg:!gap-y-24">
    
    <x-layout.span class="sm:!col-span-6 lg:!col-span-3">
      <x-form.label>Verfügbarkeit</x-form.label>
      <div>
        <x-form.select class="js-filter-attribute" data-filterType="state" aria-label="Verfügbarkeit">
          <option value="NULL">Alle Wohnungen</option>
          <option value="free">frei</option>
          <option value="reserved">reserviert</option>
          <option value="taken">vermietet</option>
        </x-form.select>
      </div>
    </x-layout.span>
    
    <x-layout.span class="sm:!col-span-6 lg:!col-span-3">
      <x-form.label>Zimmer</x-form.label>
      <div>
        <x-form.select class="js-filter-attribute" data-filterType="rooms" aria-label="Zimmer">
          <option value="NULL">Alle Zimmer</option>
          <option value="1.5">1.5</option>
          <option value="2.5">2.5</option>
          <option value="3.5">3.5</option>
          <option value="4.5">4.5</option>
          <option value="5.5">5.5</option>
        </x-form.select>
      </div>
    </x-layout.span>
    
    <x-layout.span class="sm:!col-span-6 lg:!col-span-3">
      <x-form.label>Haus</x-form.label>
      <div>
        <x-form.select class="js-filter-attribute" data-filterType="building" aria-label="Haus">
          <option value="NULL">Alle Häuser</option>
          <option value="1">Wiedingstrasse 87a–d</option>
          <option value="2">Austrasse 50-56</option>
          <option value="3">Austrasse 46/48
        </x-form.select>
      </div>
    </x-layout.span>

    <x-layout.span class="sm:!col-span-6 lg:!col-span-3">
      <x-form.label>Etage</x-form.label>
      <div>
        <x-form.select class="js-filter-attribute" data-filterType="floor" aria-label="Etage">
          <option value="NULL">Alle Etagen</option>
          <option value="eg">EG</option>
          <option value="1.og">1. OG</option>
          <option value="2.og">2. OG</option>
          <option value="3.og">3. OG</option>
          <option value="4.og">4. OG</option>
          <option value="5.og">5. OG</option>
          <option value="6.og">6. OG</option>
          <option value="7.og">7. OG</option>
        </x-form.select>
      </div>
    </x-layout.span>
    
    <x-layout.span class="mt-32 sm:mt-8 md:mt-0 sm:!col-span-6 lg:!col-span-3">
      <x-form.button class="js-btn-reset bg-sage hover:bg-white hover:text-olive transition-all w-full">
        Filter zurücksetzen
      </x-form.button>
    </x-layout.span>

  </x-layout.grid>
</form>