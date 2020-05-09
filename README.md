# Watch-Man

This is a demo application for a movie-app to understand docker usage with a Laravel Application. It also implements the TailwindCSS framework for the designing and more technologies are added as required.

## Getting Started

Docker is primarily used to setup the project and can be used for any OS of choice. This flexibility was the main reason I choose to work with Docker. It is very much necessary that you have docker installed on your system in order for this project to work correctly.

I have a Nginx folder to specify my custom requirement for a webserver. It can be changed accordingly. There is php:7.4-fpm, mysql, composer, artisan, npm and phpmyadmin container built into this project.

### For Linux Users
It is mandatory to pass two environment variables UID and GID.
In order to do that type in
#### Step 1
```
export UID=$(id -u)
export GID=$(id -g)
```
#### Step 2
```
docker-compose up -d --build
```

Apart from linux users, you can skip step 1 and directly run step 2.

### Containers

#### Composer, NPM and Artisan

The following command can be used to directly spun up the composer, npm and artisan containers, run our required commands or update commands and then be terminated as the task is completed. For example, if we want to install a library like the laravel-debugbar in our project. Then just write
```
docker-compose run --rm composer require barryvdh/laravel-debugbar --dev
```

```
docker-compose run --rm npm install tailwindcss
```

```
docker-compose run --rm artisan migrate
```

This will start the containers, execute the command given and terminate itself. This way, we do not have to exec everytime we want to run a command from terminal and this also makes it look elegant and clean.

## Built with

* [Laravel](https://laravel.com/docs/7.x) - The PHP Framework for Web Artisans
* [TailwindCSS](https://tailwindcss.com/docs/installation/) - CSS Utility First Framework

## Authors

* **Viral Patel** - *Initial work*

## Acknowledgments

* [Movieapp Tutorial](https://www.youtube.com/channel/UCtb40EQj2inp8zuaQlLx3iQ)
* [Andre Madarang](https://github.com/drehimself) - The Teacher for the movieapp
* [Docker Tutorial](https://www.youtube.com/user/ASchmelyun)
* [Andrew Schmelyun](https://github.com/aschmelyun) - The teacher for the docker setup
