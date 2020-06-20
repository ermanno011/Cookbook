Pokretanje cookbook projekta:

1. Skinuti ili klonirati projekat sa git-a (https://github.com/ermanno011/Cookbook)

Ukoliko projekat pokrećete u lokalu odraditi sledeća 4 koraka:
  1. Skinuti MAMP - https://www.mamp.info/en/downloads/ ili XAMPP - https://www.apachefriends.org/download.html
  2. U folderu gde ste instalirali jedan od ova 2 programa naći podfolder pod imenom 'htdocs'
  3. U 'htdocs' ubaciti 'Cookbook' folder koji ste klonirali ili skinuli sa git-a
  4. Pri pokretanju servera proveriti portove za localhost

2. Ući u phpmyadmin i upload-ovati cookbook.sql[bazu] file iz foldera db-a skinutog sa gita klikom na 'import' dugme na vrhu ekrana
3. Nakon upload-a baze ući na admin stranu wordpress-a - .../wp-admin i ulogovati se:
    username: admin
    password: admin
4. Pri pristupanju admin strani uploadovati slike iz cookbook-materijali.zip(skinuto sa git-a) u Media u sidebar-u
5. Dodati slike iz Media na recepte i postove, nazivi slika su identični kao nazivi recepta/posta
6. Proveriti da li je odabrana Cookbook tema u Appereance->Themes iz sidebar-a

To je to, imate spremne 2 strane (Home i Recipes) cookbook websajta :)
