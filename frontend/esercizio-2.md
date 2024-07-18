# App di prenotazione dei posti a sedere per eventi

Crea una applicazione di prenotazione di posti per eventi utilizzando React.js. L'applicazione deve consentire agli utenti di selezionare e prenotare posti in una sala virtuale.

### Dettagli dell'implementazione

L'app mostra una griglia di posti (ad esempio, 5x5) che rappresenta i posti disponibili in una sala. Le righe sono identificate dalle lettere dell'alfabeto (A, B, C, ...), le colonne da numeri (1, 2, 3, ...). Su ogni posto va quindi mostrato con il proprio numero di riga e colonna (A1, A2, B1, B3, ...).
I posti possono essere disponibili, selezionati o già prenotati:

- Quando un utente clicca su un posto disponibile, il posto deve essere selezionato.
- Quando un utente clicca su un posto selezionato, il posto deve tornare disponibile.
- Quando un utente clicca su un posto già prenotato, non deve poterlo selezionare.

Memorizzare lo stato dei posti in locale, in modo che l'utente non perda le informazioni ricaricando la pagina.

L'app mostra l'elenco dei posti selezionati e una form con un campo di input per inserire il nome della prenotazione e un tasto per confermare la prenotazione.
La prenotazione richiede che sia selezionato almeno un posto e che il nome della prenotazione non sia vuoto.

(Opzionale) Quando l'utente clicca un posto prenotato deve essere mostrato il nome di chi ha prenotato.

### Dettagli tecnici

- Utilizzare **React functional components** e **React hooks**.
- Non è richiesto l'uso di alcuna libreria esterna per la gestione dello stato (es. Redux).
- L'applicazione può essere semplice e non necessita di design complessi o stili particolari (CSS basilare va bene).
