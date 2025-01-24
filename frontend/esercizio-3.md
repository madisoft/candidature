# Pianificazione delle lezioni settimanali

Creare un'applicazione React che permetta di pianificare l'orario settimanale di una classe. Un docente deve poter
assegnare una materia in uno slot disponibile seguendo alcune regole di validazione.

## Dettagli dell'implementazione

### Interfaccia Utente

Una tabella settimanale (da lunedì a venerdì) con righe per le ore (es. "08:00-09:00", "09:00-10:00") e colonne per i giorni della settimana.
Ogni cella rappresenta una lezione e, se valorizzata, deve contenere:

- Materia
- Docente assegnato

Quando si seleziona una cella appare un form laterale per aggiungere o modificare una lezione con i seguenti campi:

- Materia selezionabile da un elenco
- Docente selezionabile da un elenco

### Specifiche

- Ogni docente può essere associato a qualsiasi materia.
- Ogni giorno è diviso in sei ore di lezione.

Quando viene inserita una lezione possono essere mostrati eventuali errori di validazione:

- Se ci sono due o più lezioni della stessa materia nello stesso giorno devono essere consecutive (Es: non si può inserire Matematica alla prima e alla sesta di lunedì)
- Ogni materia ha un limite di 5 ore settimanali.

(Opzionale):

- Persistenza dei dati al refresh della pagina.
- Report riepilogativo che mostri:
  - Ore totali per materia.
  - Ore totali per docente.

## Dettagli tecnici

- Utilizzare **React functional components** e **React hooks**.
- Non è richiesto l'uso di alcuna libreria esterna per la gestione dello stato (es. Redux).
- L'applicazione può essere semplice e non necessita di design complessi o stili particolari (CSS basilare va bene).
