# Feedback #
## De opdrachten ##
| Opdracht | Goed (5) | Voldoende (3) | Onvoldoende (1) | Niet (0) | Score (35) |
| :------- | :---: | :---------: | :-----------: | :----: |---:|
| De leerling voorziet een startpagina waar de gebruiker moet akkoord gaan met het gebruik van cookies. De leerling start een cookie. | X | | | |5 |
| De leerling maakt een inschrijvingsformulier en kan dit uitlezen.  | X | | | | 5|
| De leerling bewaart de gegevens in een databank.  | X | | | | 5|
| De leerling kan de gegevens uitlezen uit de databank en tonen in een tabel of lijst.  | X | | | | 5|
| De leerling voorziet een loginpagina die een gebruiker en paswoord controleert in de databank. | X | | | | 5|
| De leerling voorziet paswoord-hashing om het paswoord veilig te bewaren.  | | | | X | 0|
| De leerling zorgt dat enkel een ingelogde persoon de lijst met gegevens kan bekijken. | | X | | |3 |
||||||28|


## Algemene feedback ##
* confirm.php (62): Je maakt verbinding met de databank maar gebruikt dit niet. ( -1 )
* functions.php: Je embed je code binnen een <html>-tag ook al toont de pagina niets. Dit is een code-bestand dat geen visuele uitvoer heeft, dus is een <html>-tag overbodig ( -1 )
* functions.php: Je gebruikt de functie die je hierbinnen definieert nergens. Heb je toevallige deze code gekopieerd van iemand en ben je die vergeten aan te roepen?
* login.php: Dit is code die wel héél sterk lijkt op die van medeleerlingen.
* login.php (19 - 20): input escapen tegen SQL-injectie. Waar heb je die info gevonden? ( + 1 )
* login.php (32): Werkt, maar niet echt proper om zo maar een function te stoppen. Je kan dit oplossen met een proper if-statement. ( -1 )
* login.php (82): Het 'endif' statement is verouderd sinds php 4.0.0. Dus niet meer gebruiken! We gebruiken accolades { } om codeblokken te onderscheiden. ( - 1 )

Je behaalde een score van __25/35__

Prit, ik heb het gevoel dat je veel code 'gekregen' hebt van collega's. Probeer echter zoveel mogelijk zelf te doen. Doen == leren. Anders kom je op het examen in de problemen.
