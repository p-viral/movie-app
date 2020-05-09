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

## Built with

* [Laravel](https://laravel.com/docs/7.x) - The PHP Framework for Web Artisans
* [TailwindCSS](https://tailwindcss.com/docs/installation/) - CSS Utility First Framework

## Authors

* **Viral Patel** - *Initial work*

## Acknowledgments

* https://www.youtube.com/channel/UCtb40EQj2inp8zuaQlLx3iQ - Amazing Tutorials
* [Andre Madarang](https://github.com/drehimself) - The Teacher
