# App per l'inserimento delle assenze

Creare una form a 3 step per l’invio di un'assenza di un alunno.

## Dettagli dell'implementazione

1. **Step 1: inserimento del nome dell'alunno**

- Mostrare un un campo di testo per l’inserimento del nome dell’alunno.
- Includere un tasto con l'etichetta "Procedi" per passare allo step successivo.

2. **Step 2: selezione del tipo di assenza**

- Mostrare una select per la selezione della tipologia di assenza. Le opzioni disponibili devono essere: "assenza", "ritardo", "uscita anticipata".
- Includere un tasto con l'etichetta "Procedi" per passare allo step successivo.

3. **Step 3: inserimento della data dell'assenza**

- Mostrare diversi campi in base al tipo di assenza selezionato allo step precedente:
  - Assenza: Mostrare un campo di testo per l'inserimento della data.
  - Ritardo: Mostrare due campi di testo per l'inserimento della data e dell'ora di ingresso.
  - Uscita Anticipata: Mostrare due campi di testo per l'inserimento della data e dell'ora di uscita.
- Includere un tasto con l'etichetta "Invia" per inviare i dati inseriti.

4. **Invio dati**

- Al termine del terzo step, simulare l’invio dei dati a un server loggando nella console tutti i dati precedentemente inseriti.

5. **(Opzionale) Modifica dei dati**

- Inserire un tasto "Indietro" nel secondo e nel terzo step, per consentire di modificare i dati precedentemente inseriti.

6. **(Opzionale) Validazione**

- Implementare la validazione dei dati inseriti in ogni step.
  - Verificare che il campo nome non sia vuoto.
  - Verificare che una tipologia di assenza sia selezionata.
  - Verificare che la data non sia una domenica.
