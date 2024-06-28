# #########################################################################
# Personal Notes - Zilla ##################################################
# #########################################################################

Even being a PHP developer, I use to code PHP from scratch and now I'm starting to
learn Laravel Framework.

Once I'm studying, I'm gonna write some important tips down below. 

This studies are based on a YouTube Playlist:
https://www.youtube.com/watch?v=4RhY1JJgLsM&list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&index=1

### Composer (PHP Package Manager) installation
  Reference: https://medium.com/techvblogs/update-composer-in-ubuntu-4138e36205eb
  
  #### Removing actual installed Composer version:
  sudo apt-get remove composer -y
  
  #### Copying the Composer Installer from getcomposer.org. Don't forget to remove composer-setup.php file after installation
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  
  #### Installing the new Composer version (root permissions needed):
  sudo php composer-setup.php --install-dir=/usr/bin --filename=composer

### Composer dependencies installation
  While trying to create a new Laravel Project, there were some issues I needed to solve,
  by installing the dependencies below:
  
  #### Installing php-cli, php-xml and php-curl
  sudo apt install php8.1-cli php-xml php-curl
  
### Creating a new Laravel Project
  composer create-project laravel/laravel _THE_APP_NAME_

### Start server on Laravel default port 8000
  php artisan serve

### Installing Composer require-dev to the project (located on composer.json) It will lock the version of your Application with those packages and its dependencies at the folder /vendor. The /vendor folder is the same as node_modules folder for those who works with NodeJs. The composer install can be seen as the same as npm instal from NodeJS.
  composer install