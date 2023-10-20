@extends('app')
@section('seo_title', 'Q&A')
@section('seo_description', 'Bei Fragen hilft Ihnen unser Q&A gerne weiter.')
@section('content')
<div x-data="{ selected: 0 }">
  <x-layout.section class="!p-0">
    <x-misc.pattern class="hidden sm:block right-0 sm:w-[25%] md:w-[33.333%]" />
    <x-layout.inner class="px-20 lg:px-0 py-30 lg:py-50 relative z-10">
      <h1>Wobei können wir Ihnen helfen?</h1>
      <div class="mt-20 lg:mt-32 flex flex-wrap gap-12 lg:gap-24 max-w-2xl lg:max-w-3xl">
        <x-accordeon.shortcut :title="'Bewerbungsprozess'" :index="1" />
        <x-accordeon.shortcut :title="'Besichtigung'" :index="1" />
        <x-accordeon.shortcut :title="'Mietvertrag'" :index="2" />
        <x-accordeon.shortcut :title="'Mietkaution'" :index="2" />
        <x-accordeon.shortcut :title="'Haustiere'" :index="2" />
        <x-accordeon.shortcut :title="'Lage'" :index="6" />
        <x-accordeon.shortcut :title="'Ausbau'" :index="5" />
        <x-accordeon.shortcut :title="'Kellerabteil'" :index="5" />
        <x-accordeon.shortcut :title="'Deckenhöhe'" :index="5" />
        <x-accordeon.shortcut :title="'Bezugstermin'" :index="7" />
      </div>
    </x-layout.inner>
  </x-layout.section>
  <x-layout.section class="bg-white">
    <x-layout.inner>

      <x-accordeon.wrapper :index="1" data-qa-keyword="Bewerbungsprozess">
        <x-accordeon.button :title="'Bewerbungsprozess'" :index="1" />
        <x-accordeon.section :index="1">
          <x-accordeon.item>
            <x-slot name="question">Wie lange muss ich auf eine Wohnungs Zu- oder Absage warten?</x-slot>
            <x-slot name="answer">In der Regel dauert der Prozess vom Eingang der Bewerbung bis zur Zu- oder Absage dank unserer digitalen Vorprüfung der Bewerbungen weniger als eine Arbeitswoche. Beachten Sie, dass der Prozess in Ausnahmefällen mehr Zeit in Anspruch nehmen kann.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Wie kann ich mich für eine Wohnung bewerben?</x-slot>
            <x-slot name="answer">Über die Angebotsliste auf dieser Website gelangen Sie mit Klick auf das Feld «Formular» direkt zu dem digitalen Bewerbungsformular. Der gesamte Anmeldungsprozess wird über FlatFox abgewickelt. </x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Kann ich mich für mehrere Wohnungen bewerben?</x-slot>
            <x-slot name="answer">Wir bitten Sie, sich für eine Favoritenwohnung zu entscheiden. Sollte diese anderweitig vermietet werden, werden Sie entsprechend informiert und Sie können sich gerne auf eine alternative Wohnung bewerben.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Meine Wunschwohnung ist bereits reserviert, kann ich mich dennoch bewerben?</x-slot>
            <x-slot name="answer">Der Status «reserviert» bedeutet, dass wir hier bereits eine Zusage machen konnten. Sollte der Interessent abspringen, werden wir den Status umgehend wieder anpassen. Wir würden uns freuen, wenn Sie sich für eine alternative Wohnung bewerben oder die Angebotsliste in den nächsten Tagen nochmals prüfen ob Ihre Wunschwohnung wieder verfügbar ist. </x-slot>
          </x-accordeon.item>
          <x-accordeon.item data-qa-keyword="Besichtigung">
            <x-slot name="question">Wann kann die Wohnung besichtigt werden? </x-slot>
            <x-slot name="answer">Da sich die Liegenschaft noch im Bau befindet, sind Besichtigungen zurzeit nicht möglich. </x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Kann ich die Wohnung zu einem späteren Zeitpunkt besichtigen und ausmessen?</x-slot>
            <x-slot name="answer">Besichtigungen sind aufgrund der Grossbaustelle aus Sicherheitsgründen nicht möglich. Auf den Vermarktungsplänen finden Sie den Massstab sodass Sie, die Masse aus den Plänen entnehmen können.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Welche Dokumente muss ich bei einer Wohnungsbewerbung einreichen?</x-slot>
            <x-slot name="answer">Bewerben Sie sich bei uns auf eine Wohnung, werden Sie in unserem Online-Formular durch den Bewerbungsprozess geführt. Zusätzlich zu dem Fragebogen benötigen werden einen Betreibungsregisterauszug (nicht älter als 3 Monate) oder ein Zertifikat von Credittrust. </x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Wo kann ich meinen Betreibungsregisterauszug anfordern?</x-slot>
            <x-slot name="answer">
              <p>In den meisten Fällen können Sie den Betreibungsauszug Online anfordern auf der Website Ihrer Gemeinde oder Stadt. Die Kosten für die Bestellung eines Auszuges liegen um die CHF 17.00. Auch dies variiert von Gemeinde zu Gemeinde. Unten finden Sie den Link zur Anforderung für den Auszug der Stadt Zürich:</p>
              <p>
                <a 
                  href="https://www.stadt-zuerich.ch/portal/de/index/politik_u_recht/stadtammann-_undbetreibungsaemter/auszug-betreibungsregister.html" 
                  title="Website Betreibungsamt Stadt Zürich" 
                  target="_blank" 
                  class="underline underline-offset-4 hover:no-underline decoration-1">
                  Website Betreibungsamt Stadt Zürich
                </a>
              </p>
            </x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Habe ich mit einem Eintrag im Betreibungsregister überhaupt eine Chance, eine Wohnung zu mieten? </x-slot>
            <x-slot name="answer">Ja. Bewerben Sie sich in jedem Fall auf Ihre Traumwohnung. Da die Entstehung von Betreibungen unterschiedlich ist, prüfen wir Ihre Situation gerne.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Welche Unterlagen muss ich einreichen, wenn ich vom Ausland in die Schweiz ziehe? </x-slot>
            <x-slot name="answer">Wir benötigen eine Kopie Ihrer Aufenthaltsbewilligung (Ausländerausweis) oder, falls Sie noch keine haben sollten, eine Kopie Ihres Passes. Bei der Anmeldung mit unserem digitalen Anmeldeformular werden Sie zum Upload der entsprechenden Dokumente aufgefordert.</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="2" data-qa-keyword="Mietvertrag">
        <x-accordeon.button :title="'Mietvertrag'" :index="2" />
        <x-accordeon.section :index="2">
          <x-accordeon.item>
            <x-slot name="question">Per wann können die Wohnungen bezogen werden?</x-slot>
            <x-slot name="answer">
              <table class="my-16 lg:my-20">
                <tr>
                  <td class="pr-12 pb-4">Haus 1 (Wiedingstrasse 87a-d)</td>
                  <td class="pb-4">Bezug per 1. Juni 2024</td>
                </tr>
                <tr>
                  <td class="pr-12 pb-4">Haus 2 (Austrasse 50-56)</td>
                  <td class="pb-4">Bezug per 1. August 2024</td>
                </tr>
                <tr>
                  <td class="pr-12">Haus 3 (Austrasse 46/48)</td>
                  <td>Bezug per 1. Mai 2024</td>
                </tr>
              </table>
            </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Wie sind die Kündigungsfristen des Mietvertrages? </x-slot>
            <x-slot name="answer">Die Mietverträge können nach einer Mindestlaufzeit von 1 Jahr mit einer Frist von 3 Monaten auf auf jedes Monatsende ausser Dezember gekündigt werden. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item class="scroll-mt-94 md:scroll-mt-[150px]" data-qa-keyword="Mietkaution">
            <x-slot name="question">Wie hoch ist die Mietkaution?</x-slot>
            <x-slot name="answer">3 Bruttomonatsmietzinse</x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Wird eine Mietkautionsversicherung akzeptiert?</x-slot>
            <x-slot name="answer">Ja, die Mietkaution kann über eine Versicherung gedeckt werden. Das Zertifikat muss vor Übergabe dies Mietobjektes vorliegen. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Kann ich die Bank frei wählen, bei welcher ich ein Mieterkautionssparkonto eröffnen möchte?</x-slot>
            <x-slot name="answer">Sie erhalten von uns ein Formular zur Eröffnung des Mieterkautionssparkontos bei der Zürcher Kantonalbank. Dies ist jedoch nur ein Vorschlag. Gerne dürfen Sie auch bei Ihrer gewohnten Bank ein Konto eröffnen. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item data-qa-keyword="Haustiere" class="scroll-mt-94 md:scroll-mt-[150px]">
            <x-slot name="question">Sind Haustiere erlaubt?</x-slot>
            <x-slot name="answer">Haustiere (Hunde, Katzen, Kleintiere) sind grundsätzlich erlaubt, sie müssen auf dem Anmeldeformular angegeben werden (Rasse und Alter) und benötigen eine separate Haustierbewilligung. Katzentreppen oder Netze sind nicht erlaubt. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Wie werden die Stromkosten für die Ladestationen bei dem Einstellplatz abgerechnet?</x-slot>
            <x-slot name="answer">Die Kosten werden durch einen externen Betreiber direkt in Rechnung gestellt. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Wie hoch werden die Nebenkosten sein?</x-slot>
            <x-slot name="answer">Die Nebenkostenakonto ersehen Sie aus der Angebotsliste. Diese werden einmal jährlich nach den effektiven Kosten abgerechnet. Je nach Verbrauch kann es vorkommen, dass Sie eine Nachzahlung vornehmen müssen oder wenn die Kosten tief waren eine Rückerstattung erhalten. In Ihrer Wohnung haben Sie sowohl Wasser- wie auch Wärmezähler. Somit haben Sie einen direkten Einfluss auf Ihre Nebenkosten. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Kann ich auch zwei Parkplätze mieten?</x-slot>
            <x-slot name="answer">Zu Beginn wird aufgrund der Anzahl der Wohnungen jeweils nur je ein Parkplatz pro Mietwohnung zugesprochen. Sollte es nach der Vollvermietung noch freie Parkplätze zur Verfügung haben, erhalten alle Mietparteien nochmals die Chance einen zusätzlichen Parkplatz zu mieten.</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="3">
        <x-accordeon.button :title="'Hausordnung'" :index="3" />
        <x-accordeon.section :index="3">
          <x-accordeon.item>
            <x-slot name="question">Ist das Grillieren auf den Balkonen/Sitzplätzen erlaubt? </x-slot>
            <x-slot name="answer">Das Grillieren mit Gas und Elektro ist in den Aussenbereichen grundsätzlich erlaubt. Es ist jedoch Rücksicht auf die Nachbarschaft zu nehmen. Im Speziellen sind Rauch-, Geruchs- und Lärmbelästigungen zu vermeiden</x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Gibt es in den Erdgeschosswohnungen mit Terrasse eine Pflegepflicht für Pflanzen?</x-slot>
            <x-slot name="answer">Nein, die allgemeine Bepflanzung wird durch die Hauswartung gepflegt. Sie sind lediglich für Ihre Pflanzen verantwortlich. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Ab wann gilt Nachtruhe/ Sonntagsruhe?</x-slot>
            <x-slot name="answer">Es gelten die normalen gesetzlichen Nachtruhe Zeiten: ab 22.00 Uhr bis 7.00 Uhr ist die strikte Nachtruhe einzuhalten. </x-slot>
          </x-accordeon.item>
          
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="4">
        <x-accordeon.button :title="'Unterlagen'" :index="4" />
        <x-accordeon.section :index="4">
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Verfügen Sie über vermasste Grundrisspläne?</x-slot>
            <x-slot name="answer">Auf den Vermarktungsplänen finden Sie den Massstab, sodass Sie selbstständig die notwendigen Ausmessungen vornehmen können.</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="5" data-qa-keyword="Ausbau">
        <x-accordeon.button :title="'Ausbau'" :index="5" />
        <x-accordeon.section :index="5">
          <x-accordeon.item>
            <x-slot name="question">Ist die Wohnung behinderten – bzw. betagten gerecht ausgebaut?</x-slot>
            <x-slot name="answer">Das ganze Areal (Zugang bis zur Wohnung) ist behindertengerecht. Umbauten in den Nasszellen, der Küche oder der Zugang auf die Balkone müssten allenfalls getätigt werden. Der Zugang auf die Balkone ist nicht behindertengerecht. Da müsste ein Rost eingebaut werden und das Geländer erhöht werden.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Gibt es einen Lift?</x-slot>
            <x-slot name="answer">Pro Haus ein Personenaufzug für max. 9 Personen. Nutzlast 675 kg, rollstuhlgängig</x-slot>
          </x-accordeon.item>

          <x-accordeon.item>
            <x-slot name="question">Gibt es Trocknungsräume im Untergeschoss für die Allgemeinheit? </x-slot>
            <x-slot name="answer">Ja, es stehen Trocknungsräume mit Secomat zur Verfügung. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Sind Veloräume vorhanden?</x-slot>
            <x-slot name="answer">Ja, die Überbauung verfügt über genügend Veloabstellmöglichkeiten sowohl gedeckt wie auch ungedeckte. Ebenfalls ist eine grosse Anzahl an Steckdosen für E-Bikes vorhanden </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Darf ich auch den Kinderwagen in den Veloraum stellen?</x-slot>
            <x-slot name="answer">Nein, für die Kinderwägen gibt es separate Räume. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Sind Parkplätze für E-Fahrzeuge vorhanden? </x-slot>
            <x-slot name="answer">Ja, in der Tiefgarage können auf Wunsch Parkplätze mit Ladestationen gemietet werden. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item class="scroll-mt-94 md:scroll-mt-[150px]" data-qa-keyword="Kellerabteil">
            <x-slot name="question">Sind Kellerabteile vorhanden und wie gross sind diese?</x-slot>
            <x-slot name="answer">Zu jeder Wohnung gehört ein Kellerabteil. Die Grösse ist auf den jeweiligen Wohnungsgrundrissen vermerkt. Die Grundrisse finden Sie in der Angebotsliste</x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Sind Steckdosen im Kellerabteil vorhanden?</x-slot>
            <x-slot name="answer">In jedem Kellerabteil ist eine Steckdose vorhanden, welche direkt über den Stromzähler Ihrer Wohnung läuft. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item class="scroll-mt-94 md:scroll-mt-[150px]" data-qa-keyword="Deckenhöhe">
            <x-slot name="question">Wie hoch sind die Decken?</x-slot>
            <x-slot name="answer">Die Raumhöhe beträgt in der Regel 2.50 m. Im Erdgeschoss vom Haus 2 (Austrasse 50-56) ist sie 3.20m.</x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Verfügt die Liegenschaft über Glasfaseranschluss und über welchen Provider kann ich Internet beziehen?</x-slot>
            <x-slot name="answer">Die Liegenschaft wird an das Glasfasernetz angeschlossen. Der Mieter kann selbstständig einen Anbieter wählen. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Wann erhalte ich die OTO Nr. </x-slot>
            <x-slot name="answer">Die Nr. wird Ihnen frühzeitig vor der Wohnungsübergabe mitgeteilt.</x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Gibt es unterschiedliche Grössen bei den Einstellplätzen?</x-slot>
            <x-slot name="answer">Die Einstellplätze sind alle gleich gross. Ausgenommen sind die IV-Parkplätze welche breiter ausfallen. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Was für Geräte werden in der Küche eingebaut?</x-slot>
            <x-slot name="answer">
              <p>Die ausgewählten Haushaltsgeräte sind alle der Marke Siemens und weisen hohe Qualität auf. Folgende Geräte stehen Ihnen zur Verfügung:</p>
              <ul>
                <li>Spülmaschine</li>
                <li>Backofen</li>
                <li>Induktion Kochfeld</li>
                <li>Dunstabzug</li>
                <li>Kühlschrank</li>
                <li>Gefrierschrank</li>
              </ul>
              <p>(wir weisen darauf hin, dass diese Geräte den Basisstandard beschreiben. Die Geräte können jedoch je nach Wohnung variieren)</p>
            </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Verfügt jede Wohnung über einen Waschturm?</x-slot>
            <x-slot name="answer">Ja, jede Wohnung verfügt über eine Waschmaschine und Wäschetrockner der Marke Electrolux. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Habe ich auf dem Balkon Strom und/oder Wasseranschluss?</x-slot>
            <x-slot name="answer">Auf den Dachterrassen in Haus 1 und 2 haben Sie je einen Wasseranschluss auf Terrasse im Haus 3 im Attikageschosse ist ebenfalls ein Wasseranschluss vorhanden. Auf allen weiteren Balkonen/Terrassen gibt es keine Wasseranschlüsse. Ein Stromanschluss ist auf jedem Balkon/Terrasse vorhanden.  </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Wann wird diese Überbauung fertiggestellt?</x-slot>
            <x-slot name="answer">Die Überbauung wird in 3 Etappen fertiggestellt: Haus 1 01.06.2024 / Haus 2: 01.08.2024 / Haus 3: 01.05.2024. Bauverzögerungen vorbehalten. Der effektive Mietbeginn wird Ihnen mindestens 4 – 5 Monate vor Bezug schriftlich bestätigt.  </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Wann ist die Umgebung fertiggestellt?</x-slot>
            <x-slot name="answer">Die Umgebung wird voraussichtlich bis Ende September 2024 fertiggestellt. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Wo hat es Besucherparkplätze und wie viele?</x-slot>
            <x-slot name="answer">Die 18 Besucherparkplätze befinden sich in der Tiefgarage. </x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Was für eine Heizung wurde eingebaut?</x-slot>
            <x-slot name="answer">Die Beheizung erfolgt mittels Bodenheizung. Heizungstyp: Erdsonden Wärmepumpe / Passive Kühlung im Sommer möglich.</x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item>
            <x-slot name="question">Hat jede Wohnung / Zimmer einen eigenen Thermostat?</x-slot>
            <x-slot name="answer">Ja, jedes Zimmer hat einen Raumthermostat.</x-slot>
          </x-accordeon.item>
          
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Wurde eine kontrollierte Lüftung eingebaut?</x-slot>
            <x-slot name="answer">Nein. Es findet ein stetiger Luftwechsel über Abzüge bei der Küche (nicht über den Dampfabzug) und über die Nasszellen, und Zuluft über Lüftungsschlitze bei den Fenstern statt.</x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="6" data-qa-keyword="Lage">
        <x-accordeon.button :title="'Lage'" :index="6" />
        <x-accordeon.section :index="6">
          <x-accordeon.item>
            <x-slot name="question">Wo ist die nächste Zug- / Bushaltestelle?</x-slot>
            <x-slot name="answer">In nur wenigen Gehminuten (100 m Entfernung) erreichen Sie die Bushaltestelle Binz oder den Zug Bahnhof Binz.</x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Wo liegt die nächste öffentliche Schule?</x-slot>
            <x-slot name="answer"><p>Kindergarten bis Primarschule Bühl befindet sich nur 10 Gehminuten entfernt.</p><p>Auch die Oberstufenschule Rebhügel befindet sich in Gehdistanz.</p></x-slot>
          </x-accordeon.item>
          <x-accordeon.item>
            <x-slot name="question">Wo liegen meine Einkaufsmöglichkeiten?</x-slot>
            <x-slot name="answer"><p>Einen Coop, Lidl und Denner liegen alle in einem Umkreis von 500 m.</p><p>Zusätzlich liegt das Einkaufszentrum Sihlcity mit verschiedensten Attraktionen wie Kino, Einkaufsmöglichkeiten und Restaurants nur 850 m entfernt.</p></x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

      <x-accordeon.wrapper :index="7" data-qa-keyword="Bezugstermin">
        <x-accordeon.button :title="'Übergabe'" :index="7" />
        <x-accordeon.section :index="7">
          <x-accordeon.item>
            <x-slot name="question">Kann die Wohnung auch früher bezogen werden?</x-slot>
            <x-slot name="answer">
              <p>Aufgrund der hohen Anzahl Wohnungen, wird für die Wohnungsübergaben sowie den anschliessenden Umzug ein Konzept erstellt. Dieses wird Ihnen frühzeitig zugestellt, sodass Sie Ihren Einzug effizient planen können.</p>
              <p>Der definitive Bezugstermin wird spätestens 4 Monate vor Bezug nochmals bekanntgegeben bzw. bestätigt.</p>
            </x-slot>
          </x-accordeon.item>
          <x-accordeon.item class="!mb-0">
            <x-slot name="question">Was gibt es in einem Neubau in Bezug auf Mängel zu beachten und in welchem Zeitraum werden diese behoben? </x-slot>
            <x-slot name="answer">Nach dem Einzug in eine Neubauwohnung können Sie uns Mängel innert 14  Tagen schriftlich melden. Sollten Sie nach Ablauf dieser Frist im laufenden Mietverhältnis Mängel oder Schäden entdecken, melden Sie uns diese bitte immer umgehend dem zuständigen Bewirtschafter. </x-slot>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>

    </x-layout.inner>
  </x-layout.section>
</div>
@endsection