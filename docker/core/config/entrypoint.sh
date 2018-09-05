#!/usr/bin/env bash
#-----------------------------------------------------------------------------
#                 OriginS-Esport - Service org-ws-core Entrypoint
#-----------------------------------------------------------------------------
#
#   File    : docker/core/config/entrypoint.sh
#
#   Author  : Nicolas DUPRE
#   Version : 0.3.0
#   Started : 06.03.2018
#   Release : 14.03.2018
#   Status  : release
#
#   Description :
#     Script exécuter une fois le container créé.
#
#   Notew :
#     L'emplacement de référence est le WORKDIR défini dans Dockerfile.
#     Les variables ENV sont disponible.
#

# Créer un fichier de logs pour Docker accessible dans le projet.
touch /var/www/astronomical/docker/log/docker.log
ln -s /var/www/astronomical/docker/log/docker.log /docker.log


# Démarrage des services.
#───┐ PHP5-FPM
service php5-fpm start >> /docker.log 2>&1
#───┐ NGINX
service nginx start >> /docker.log 2>&1
#───┐ MySQL
service mysql start >> /docker.log 2>&1


# Configurations finales
#───┐ Création d'un utilisateur SQL
mysql -p$MYSQL_ROOT_PASSWORD -e "CREATE DATABASE OrG"
mysql -p$MYSQL_ROOT_PASSWORD -e "CREATE USER 'astro'@'%' IDENTIFIED BY 'astronomical'"
mysql -p$MYSQL_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON astro.* TO 'astro'@'%' IDENTIFIED BY 'astronomical'"
mysql -p$MYSQL_ROOT_PASSWORD -e "FLUSH PRIVILEGES"


# Téléchargement de composer
cd /
wget https://getcomposer.org/composer.phar
chmod +x composer.phar
mv composer.phar /usr/local/bin/composer

# Récupération des dépendances
echo 'Installing/updating Composer dependancies...' > /docker.log
cd /var/www/astronomical
composer create-project >> /docker.log 2>&1 || composer update >> /docker.log 2>&1


# Rendre sa ligne de commande exécutable globale
#ln -s /var/www/astronomical/src/astronomical.php /usr/local/bin/astronomical
ln -s /var/www/astronomical/vendor/phpunit/phpunit/phpunit /usr/local/bin/phpunit
ln -s /var/www/astronomical/vendor/phpdocumentor/phpdocumentor/bin/phpdoc /usr/local/bin/phpdoc



# Garder le container en running state.
cd /
tail -f docker.log
