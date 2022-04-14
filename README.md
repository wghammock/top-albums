## About ******** Back End Challenge

In a fictional world, we are branching into the music business and need to develop an API to
retrieve the different albums we want to showcase on our website. We can leverage the iTunes
album library to help populate our own inventory.

## Instructions - Set Up
For the purposes of this documentation is assumed that you are running Unutu. Before getting 
started, please ensure your system has composer and docker installed.

NOTE:: It may be neccessary to turn off any services blocking ports.
For example:
sudo service apache2 stop
sudo service postgresql stop

## Instructions - Running

• $ alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
• $ sail up
• $ sail artisan migrate

Quick Start
Use the artisan seed command to get started quickly and create an admin user without needing to register
• $ sail artisan db:seed
User: admin@admin.com
Pass: #nAxFG3cs%W4He657t&TntWCy

## Base Requirements For All Levels

Create an API endpoint that can retrieve the top 100 albums based on the json feed here:
https://itunes.apple.com/us/rss/topalbums/limit=100/json

• A clean & modern RESTful API architecture for retrieving the top 100 albums
• Clean, readable, maintainable codebase
• Code can be written in any language, but preferably in PHP
• Host source code on GitHub

## Built in Laravel

Built in [Laravel](https://laravel.com/)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).