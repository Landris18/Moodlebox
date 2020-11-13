# Rasp
Extinction d'un serveur Moodlebox Linux


## Comment faire ?

sudo chsh -s /bin/bash wwww-data

sudo nano /etc/passwd (Juste pour vérification)

sudo passwd www-data

sudo adduser wwww-data sudo


### Editer le fichier sudoers par la commande

sudo visudo

Ajouter ces lignes:

wwww-data   ALL=NOPASSWD:ALL

%sudo   ALL=NOPASSWD: /bin/systemctl poweroff -i

