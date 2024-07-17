<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        $newProject = new Project();
        $newProject->type_id = '1';
        $newProject->name_project = 'Boolzapp';
        $newProject->description = "
                                    Questa è una web app di messaggistica, creata con Vue.js, che assomiglia a una tipica applicazione di chat. Ecco una descrizione dettagliata delle sue caratteristiche e del layout:
                                    INTERFACCIA UTENTE:
                                    Barra Laterale Sinistra:
                                    Profilo Utente: In alto a sinistra c'è un'icona circolare con l'immagine di profilo dell'utente, etichettato come 'Francesco'.
                                    Notifiche: Sotto l'immagine di profilo c'è una sezione per ricevere notifiche sui nuovi messaggi, con un'opzione per attivare le notifiche desktop.
                                    Ricerca: Una barra di ricerca consente di cercare o iniziare una nuova chat.
                                    Elenco Chat: Un elenco di conversazioni recenti con vari contatti. Ogni contatto ha un'icona, il nome e l'ultimo messaggio ricevuto.
                                    Finestra di Chat:
                                    Intestazione della Chat: In alto a destra, c'è l'icona e il nome del contatto attuale (Fabio), insieme all'ultimo accesso.
                                    Messaggi: La finestra principale mostra i messaggi scambiati con il contatto selezionato. I messaggi sono visualizzati in bolle di testo.
                                    Campo di Input: In basso, c'è un campo di input per scrivere nuovi messaggi, accompagnato da un'icona di microfono per inviare messaggi vocali.";
        $newProject->img = '/img/Boolzap.png';
        $newProject->date = now();
        $newProject->save();
        $language = [1, 2, 3];
        $newProject->languages()->sync($language);

        $newProject = new Project();
        $newProject->type_id = '3';
        $newProject->name_project = 'Boolflix';
        $newProject->description = "Questa è una web app di streaming simile a Netflix, chiamata 'BoolFlix', creata utilizzando Vite e Vue.js. Ecco una descrizione dettagliata delle sue caratteristiche e del layout:

Interfaccia Utente:

1. Intestazione:
   - Logo: In alto a sinistra c'è il logo 'BoolFlix' in rosso su sfondo nero, ben visibile.
   - Barra di Ricerca: In alto a destra c'è una barra di ricerca con il placeholder 'Titolo da cercare', affiancata da un pulsante 'Search' rosso con un'icona di una casa (home).

2. Sezione Principale:
   - Titolo della Sezione: Subito sotto l'intestazione, su sfondo rosso, troviamo il titolo 'Most Popular Films' in bianco, indicando che questa sezione mostra i film più popolari.
   - Elenco dei Film: Viene visualizzata una griglia con le locandine dei film più popolari. Ogni locandina è presentata con un'immagine accattivante e chiara. Alcuni dei film visualizzati sono:

Funzionalità Implementate con Vite e Vue.js
-Reattività: L'app è altamente reattiva grazie all'utilizzo di Vite, che permette una velocità di build e un'esperienza di sviluppo rapida. Vue.js gestisce l'aggiornamento dinamico dei contenuti.
-Componenti: L'interfaccia è divisa in componenti Vue, facilitando la gestione e la manutenzione del codice. I componenti possono includere la barra di ricerca, la griglia dei film, e ciascun film come un componente individuale.
-Ricerca Dinamica: La barra di ricerca permette di cercare film e serie TV, aggiornando i risultati in tempo reale senza ricaricare la pagina.

Potenziali Aggiunte
- Pagine dei Dettagli: Pagine individuali per ciascun film, contenenti descrizioni dettagliate, trailer, recensioni e opzioni di streaming.
- Filtri e Categorie: Filtri avanzati per cercare film per genere, anno, valutazione, ecc.
- Funzioni Social: Opzioni per creare liste di preferiti, lasciare recensioni, e condividere contenuti con amici.";
        $newProject->img = '/img/Boolflix.png';
        $newProject->date = now();
        $newProject->save();
        $language = [1, 2, 3];
        $newProject->languages()->sync($language);



        $newProject = new Project();
        $newProject->type_id = '1';
        $newProject->name_project = 'Autocar';
        $newProject->description = "
Questo è un sito web di vendita auto chiamato 'Autocar', creato in gruppo. Utilizza un design moderno e intuitivo per facilitare l'acquisto e la vendita di auto.
Caratteristiche Principali:
Interfaccia Pulita: Il sito presenta un'interfaccia pulita e professionale con un logo distintivo e un menu di navigazione semplice.
Immagini di Alta Qualità: Utilizza immagini ad alta risoluzione di auto, enfatizzando l'aspetto visivo per attrarre gli utenti.
Testi Promozionali: Include testi promozionali chiari e concisi che evidenziano i benefici di comprare e vendere auto sul sito.
Navigazione Intuitiva: La navigazione è facile e intuitiva, con accesso rapido alle sezioni principali come Home, About Us, Vehicles, Dealers, Packages, Blog, e Contact.";
        $newProject->img = '/img/Autocar.png';
        $newProject->date = now();
        $newProject->save();
        $language = [1, 2, 3];
        $newProject->languages()->sync($language);
    }
}
