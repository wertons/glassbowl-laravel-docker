
# Glassbowl deploy steps

  

- Clone the git https://github.com/wertons/glassbowl-laravel-docker

- Create the ```.env``` by copying ```.env.example``` and modify it to satisfy the deploy's needs. Make sure that the defined ports are not in use

- The dependencies for the project are built upon composer and npm.  You will need the following dependencies for the project: nodejs, php ^7.4 and composer

- You can install NodeJS and NPM with ```sudo apt install nodejs npm```

- You can install PHP with ```sudo apt install php php-cli php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath```

- You can install Composer by following the guide at https://phoenixnap.com/kb/how-to-install-composer-ubuntu-18-04

- Run ```npm install``` && ```composer install```

- The project uses sail to manage the docker enviroment use the command ```php artisan sail:install``` to prepare the enviroment, then when prompted enter ```0``` in order to install mysql dependencies

- Now to serve the sail container run ```./vendor/bin/sail up```

- You should also run the command ```./vendor/bin/sail artisan migrate``` in order to migrate the db. Then run ```php artisan key:generate``` to create keys for the API