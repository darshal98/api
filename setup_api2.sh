sudo apt-get upgrade -y
sudo apt-get update -y
sudo apt install -y php php-mbstring php-bcmath composer rsyslog git
sudo apt install -y apache2

cd /var/www/html

sudo mkdir api

#this will clone the frontend files to this instance.

git clone https://github.com/darshal98/api.git

cd api

sudo apt install composer
composer require php-amqplib/php-amqplib
composer install


