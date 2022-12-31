# Moodlebox RASP
Extinction d'un serveur Moodlebox Linux via une interface web locale


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

www-data ALL=NOPASSWD: /bin/systemctl poweroff -i


### Lancement 

Accéder à votre localhost et le tour est joué 💪👊
