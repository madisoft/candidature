# App di prenotazione posti per eventi

L'obiettivo dell'applicazione è permettere agli utenti di selezionare e prenotare posti in una sala virtuale.

### Dettagli dell'implementazione

L'app mostra una griglia di posti (es. 5x5) che rappresenta i posti disponibili in una sala. Le righe sono identificate dalle lettere dell'alfabeto (A, B, C, ...), le colonne da numeri (1, 2, 3, ...). Ogni posto visualizza il suo identificativo corrispondente alla riga e alla colonna (es. A1, A2, B1, B3, ...).
L'applicazione deve supportare anche griglie rettangolari (es. 4x5, 6x4), supponendo che il numero di righe e colonne sia fornito dinamicamente, ad esempio da un server.
I posti possono essere disponibili, selezionati o già prenotati:

- Quando un utente clicca su un posto disponibile, il posto deve essere selezionato.
- Quando un utente clicca su un posto selezionato, il posto deve tornare disponibile.
- Quando un utente clicca su un posto già prenotato, non deve poterlo selezionare.

Memorizzare lo stato dei posti in locale, in modo che l'utente non perda le informazioni ricaricando la pagina.

Oltre alla griglia di prenotazione, l'applicazione deve mostrare un elenco testuale dei posti selezionati (es. "Hai selezionato: A1, A2, A3").
La conferma della prenotazione dei posti selezionati avviene tramite la compilazione di un modulo, che richiede l'inserimento del nome del prenotante tramite un campo di input.
La prenotazione può essere effettuata solo se è stato selezionato almeno un posto e se il campo del nome non è vuoto.

(Opzionale) Quando l'utente clicca un posto prenotato deve essere mostrato il nome di chi ha prenotato.

### Dettagli tecnici

- Utilizzare **React functional components** e **React hooks**.
- Non è richiesto l'uso di alcuna libreria esterna per la gestione dello stato (es. Redux).
- L'applicazione può essere semplice e non necessita di design complessi o stili particolari (CSS basilare va bene).
