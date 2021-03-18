# Creare server LEMP con Cloudformation 

Attività da svolgere:

1. Creare, utilizzando la command line di aws una nuova istanza Ec2 attraverso il seguente template cloudformation:
```
devops/template_cloudformation/lamp_on_ec2.template.json
```
Per la creazione dello stack utilizzare anche il file:
```
devops/template_cloudformation/parameters.json
```
2. Una volta eseguito il comando di creazione, sempre da command line, verificare lo stato di creazione dello stack. Al termine della creazione verrà riportato l'URL per accedere via HTTP al server LEMP. Se occorre connettersi al server utilizzando il protocollo SSH, utilizzare la private key che vi è stata inviata per email.
3. Connettersi alla web application aprendo la home page.
4. Una volta che si è avuto l'accesso alla web application è richiesto di ridurre in modo significativo il tempo di apertura della pagina. Descrivere gli strumenti e le procedure che si utilizzano.
5. Individuare una strategia di troubleshooting per analizzare il server durante uno stress-test.
