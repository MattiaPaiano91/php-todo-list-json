# PHP ToDo List JSON

Questo progetto è una web-app sviluppata con HTML, CSS, Vue.js (importato tramite CDN), Axios e PHP che permette di leggere e gestire una lista di Todo. I dati dei Todo vengono caricati da un file JSON, garantendo la persistenza dei dati.

## Descrizione

L'applicazione consiste in un'interfaccia che visualizza una lista di Todo letti da un file JSON. Ogni Todo è rappresentato da un elemento nella lista, che può essere rimosso o completato. L'applicazione utilizza Vue.js per la gestione della logica e dell'interfaccia utente, Axios per effettuare chiamate AJAX al server PHP, e PHP per leggere e manipolare il file JSON contenente i dati dei Todo.

## Tecnologie utilizzate

- HTML
- CSS
- Vue.js (importato tramite CDN)
- Axios
- PHP

## Installazione

1. Clonare il repository
2. Avviare un server web locale (ad esempio, utilizzando XAMPP o MAMP)
3. Aprire l'applicazione tramite il server web locale

## Struttura del progetto

- `index.php`: File principale che contiene l'interfaccia utente e importa Vue.js e Axios
- `scripts.js`: File JavaScript che contiene la logica dell'applicazione Vue.js
- `todo.json`: File JSON che contiene i dati dei Todo
- Vari file php che ricevono e gestiscono le chimate api dal file js

## Funzionalità

- Visualizzazione della lista di Todo letti dal file JSON
- Rimozione di un Todo dalla lista
- Marcatura di un Todo come completato
