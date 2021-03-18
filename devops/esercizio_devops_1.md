# Gestione bucket AWS S3 

Attività da svolgere:

1. Utilizzando la command line di aws (tutti i comandi di seguito dovranno essere eseguiti con questo strumento) creare un bucket con il seguente nome nella region eu-west-1:
   ```
   selezione-devops-madisoft-cognomecandidato
   ```
2. Ora dovrai impostare sul bucket una server-side encryption at rest, per tutti i file con l'algoritmo di cifratura:
   ```
   AES256
   ```
3. A questo punto occorre fare un test caricando un file sul bucket appena creato e verificare che questo sia criptato correttamente.
4. Creare ed applicare al bucket una policy bucket che vieta l'upload dei file non criptati con AES256. 
5. Quale è la differenza tra policy bucket e IAM policy? Perchè ne esistono di 2 tipi?
6. Ultima operazione è quella di caricare un file sul bucket senza encryption e verificare il funzionamento della policy appena creata.
