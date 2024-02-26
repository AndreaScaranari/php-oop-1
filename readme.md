# Esercizio di oggi: PHP Movie
### Nome repo: php-oop-1
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 1. è definita una classe Movie<br>
   => all'interno della classe sono dichiarate delle variabili d'istanza<br>
   => all'interno della classe è definito un costruttore<br>
   => all'interno della classe è definito almeno un metodo<br>
2. vengono istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà

### Bonus 1:
Creare una classe Director e modificare la classe Movie in modo che accetti come direttore un'istanza di Director

### Bonus 2:
Creare una classe Actor e modificare la classe Movie in modo che accetti piú di un attore

### Bonus: 3:
Creare un layout html per stampare a schermo una lista di movies.<br>
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati