# Creare server LAMP con Cloudformation 

Attività da svolgere:

1. Accedi seguendo le istruzioni inviate per email al server fornito per effettuare i test.
2. Installa l'AWS CLI alla versione >= 2, se non è presente.   
3. Creare, utilizzando la command line di aws, una nuova istanza Ec2 attraverso il seguente template cloudformation, imposta come nome dello stack testmadisoft:
```
devops/template_cloudformation/lamp_on_ec2.template.json
```
Per la creazione dello stack utilizzare anche il file:
```
devops/template_cloudformation/parameters.json
```
4. Una volta eseguito il comando di creazione, sempre da command line, verificare lo stato di creazione dello stack. Al termine della creazione verrà riportato l'URL per accedere via HTTP al server LAMP. Se occorre, utilizzando la private key che vi è stata inviata per email, connettersi al server attraverso il protocollo SSH(Il server remoto è su Amazon Linux).
5. Connettersi alla web application aprendo la home page.
6. Una volta che si è avuto l'accesso alla web application è richiesto di ridurre in modo significativo il tempo di apertura della pagina senza cambiare le configurazioni del server web. Descrivere gli strumenti e le procedure che si utilizzano.
7. Individuare una strategia di troubleshooting per analizzare il server durante uno stress-test.
