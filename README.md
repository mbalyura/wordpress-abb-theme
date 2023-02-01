## How to run this project in easiest way :)

Run Wordpress with docker (need docker, docker-compose to be installed locally. At first run, this command pull the images, and then start containers)

    $ ./up

Restore database from dump (file db/backup.sql need to exist):

    $ ./db_restore

Build theme assets (need node):

    $ cd wp-content/themes/abb/assets
    $ npm i
    $ npm run build

__Go to localhost:8000 and see the site)__

It also possible to run project in developmend mode:

    $ cd wp-content/themes/abb
    $ npm run dev
This will start dev-server on localhost:3000, and watch for changes in source files



## Some another usefull commands:

Stop and remove containers:

    $ ./down


Make database dump (dump stored to db/backup.sql):

    $ ./db_dump