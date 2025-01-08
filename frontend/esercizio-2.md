# App di prenotazione posti per eventi

L'obiettivo dell'applicazione è permettere agli utenti di selezionare e prenotare posti in una sala virtuale.

### Dettagli dell'implementazione

L'app mostra una griglia di posti che rappresenta i posti disponibili in una sala. La dimensione della griglia è variabile e può essere configurata utilizzando due variabili: una per il numero di righe e una per il numero di colonne. Le righe sono identificate dalle lettere dell'alfabeto (A, B, C, ...), mentre le colonne sono identificate da numeri (1, 2, 3, ...). Ogni posto deve essere mostrato con il proprio identificativo di riga e colonna (ad esempio, A1, A2, B1, B2, ...). Utilizzare due costanti per definire il numero di righe e colonne della griglia e implementare il resto dell'esercizio partendo da queste costanti.

I posti possono essere disponibili, selezionati o già prenotati:

- Quando un utente clicca su un posto disponibile, il posto deve essere selezionato.
- Quando un utente clicca su un posto selezionato, il posto deve tornare disponibile.
- Quando un utente clicca su un posto già prenotato, non deve poterlo selezionare.

Un elemento testuale elenca la lista dei posti selezionati (es. "Hai selezionato: A1, A2, A3"). Memorizzare lo stato dei posti in locale, in modo che l'utente non perda le informazioni ricaricando la pagina.

Per confermare la prenotazione dei posti selezionati l'utente deve inserire il proprio nome in un campo di input di una form e cliccare su un tasto "Prenota".
La prenotazione può essere effettuata solo se è stato selezionato almeno un posto e se il campo del nome non è vuoto.

(Opzionale) Quando l'utente clicca un posto prenotato deve essere mostrato il nome di chi ha prenotato.

### Dettagli tecnici

- Utilizzare **React functional components** e **React hooks**.
- Non è richiesto l'uso di alcuna libreria esterna per la gestione dello stato (es. Redux).
- L'applicazione può essere semplice e non necessita di design complessi o stili particolari (CSS basilare va bene).
