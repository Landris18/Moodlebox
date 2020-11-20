# Rasp
Extinction d'un serveur Moodlebox Linux


## Comment faire ?

sudo chsh -s /bin/bash www-data

sudo nano /etc/passwd (Juste pour vérification)

sudo passwd www-data

sudo adduser www-data sudo


### Editer le fichier sudoers par la commande

sudo visudo

Ajouter ces lignes:

www-data   ALL=NOPASSWD:ALL

%sudo   ALL=NOPASSWD: /bin/systemctl poweroff -i

