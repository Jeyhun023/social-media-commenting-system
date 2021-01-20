# Help to run project
1) Firstly clone or download project to your computer
2) Open Xampp program and start MySql
3) Open your commander, enter project file then run "php artisan serve" (without quotes)
4) Enter http://localhost/phpmyadmin/ in your browser. Then create new database with name "social-media" (without quotes). Now upload social-media.sql to your database. (You can find this file in the project files)
5) Change .env.example filename to .env 
   Make sure that database connection in .env file is as following:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=social-media
    DB_USERNAME=root
    DB_PASSWORD=
6) Finally, you can run http://localhost:8000/ to open website in local.

Features
* Users can look posts and comments without register
* You can register to system
* Registered users can publish new posts
* Registered users can share comment to posts and other comments (subcomment) unlimited

Additionally
Default user:
E-mail: admin@friend.com
Password: admin123
