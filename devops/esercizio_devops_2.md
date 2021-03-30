# Prepara un ambiente a container 

Attività da svolgere:

1. Installa sull'istanza tutti gli strumenti necessari per usare docker.
2. Prepara un Dockerfile per un webserver che rispetti i seguenti prerequisiti:
  * Come immagine base deve usare ubuntu 20.04 LTS
  * Deve avere installato un webserver Nginx
  * L'applicazione deve rispondere sulla porta 80
  * Il Dockerfile deve fare il deploy nel container di una semplice pagina html con scritto "Welcome to Madisoft!"
3. [OPZIONALE] Il container creato deve utilizzare massimo 64MB di ram, 1 CPU ed il 50% dei cicli della CPU.
4. Dopo aver scritto il Dockerfile e creato l'immagine, esegui il container ed effettua un test per verificare che  la pagina html creata sia accessibile da internet.
5. [OPZIONALE] E' necessario controllare i log di  docker per controllare che l'output del container non abbia riportato errori.
6. [OPZIONALE] Un volta che il container è in esecuzione è necessario conoscerne le statistiche di utilizzo, usando le utility offerte da docker.
7. Descrivi se ci sono note particolari nel tuo Dockerfile. Secondo te è pronto per essere usato in produzione?
