YATI (Yii2 Advanced Template Improved)
======================================
YATI is a skeleton for Yii2 which is inherited from Yii2 Advanced template.

The default Yii2 Advanced template is good but to make it production ready, you will have to put some efforts.

Our aim is to minimize these efforts and make your life easy and painless.

YATI includes a lot of features out of the box which you would be installing manually after using the default Yii2 templates.

Why should you do that? Why waste your time setting up everything from plugins to pretty URL and API structure if you can get it all together in one package?

If you have any suggestions or complaints, feel free to email me at- pankaj [at] foqat [dot] com


Why YATI?
---------
1. Pretty URLs enabled for both frontend and backend.
2. Backend can be accessed by /admin.
3. Gii is enabled for frontend and backend.
4. Debug bar is enabled for frontend and backend.
5. Commonly used extensions are added in composer file.
6. API structure and API versioning is readymade.
7. JSON formatter is enabled out of the box.
8. /web/ is removed from the URL for backend, frontend and api folder structure.


All above features can save hours of work and frustration of developers.


Core Plugins-
-------------

Here is the list of core plugins and strucutre which should not be removed or else things will break.

Yii2 Framework (2.0.12) - https://github.com/yiisoft/yii2

Advanced Template - https://github.com/yiisoft/yii2-app-advanced


Pre-Added Plugins in Composer-
==============================

Validator Plugins-
------------------

Password Validator - https://github.com/kartik-v/yii2-password

Domain Validator - https://github.com/dmitry-kulikov/yii2-domain-validator

At Least Validator - https://github.com/code-on-yii/yii2-at-least-validator

Date Time Compare Validator - https://github.com/nepstor/yii2-datetime-compare-validator

Black List Validator - https://github.com/chouaibi/yii2-blacklist-validator


Widget Plugins-
---------------

Tree Manager - https://github.com/kartik-v/yii2-tree-manager

Kartik Widgets - https://github.com/kartik-v/yii2-widgets

Kartik Date Range Picker - https://github.com/kartik-v/yii2-date-range

Kartik Sortable Input - https://github.com/kartik-v/yii2-sortable-input

Kartik Editable - https://github.com/kartik-v/yii2-editable

Widget Alert - https://github.com/kartik-v/yii2-widget-alert

Sweet Alert - https://github.com/aryelds/yii2-sweet-alert

jQuery UI - https://github.com/yiisoft/yii2-jui


Images Plugins-
--------------

Imagine - https://github.com/yiisoft/yii2-imagine

Imagick - https://github.com/tpmanc/yii2-imagick


Other Plugins-
--------------

Enhanced Gii - https://github.com/mootensai/yii2-enhanced-gii

Collection - https://github.com/yii2mod/collection

Helpers - https://github.com/yii2mod/yii2-helpers

Kartik Helpers - https://github.com/kartik-v/yii2-helpers

HTTP Client - https://github.com/yiisoft/yii2-httpclient

Scheduling - https://github.com/yii2mod/yii2-scheduling

Disable Submit Buttons - https://github.com/Faryshta/yii2-disable-submit-buttons

Admin LTE Template - https://github.com/almasaeed2010/AdminLTE

Yii2 Facades (Yifa) - https://github.com/foqat/yifa


All of the above modules are already enabled in the config files. If you don't like any of them, simply remove them
from composer.json and run a composer update.

Please read the respective documentation of above extensions to know their usage.


Installation
------------

## Requirements

The minimum requirement by this project template is that your Web server supports PHP 5.4.0.

## Installing using Git Clone

You can install this template with below command in your terminal:

    git clone https://github.com/foqat/yati.git


## Install from an Archive File

Extract the archive file downloaded from this repository to your Web root.

Then follow the instructions given below.


## Preparing application

After you have downloaded or ran git clone, you have to follow below steps to initialize the installed application.

1. Execute the `init` command and select `dev` as environment.

   ```
   php /path/to/yii-application/init
   ```

   Otherwise, in production execute `init` in non-interactive mode.

   ```
   php /path/to/yii-application/init --env=Production --overwrite=All
   ```

2. Create a new database and adjust the `components['db']` configuration in `common/config/main-local.php` accordingly.

3. Apply migrations with console command `yii migrate`.

4. Set document roots of your web server:

   - for frontend `/path/to/yii-application/frontend/web/` and using the URL `http://frontend.dev/`
   - for backend `/path/to/yii-application/backend/web/` and using the URL `http://backend.dev/`
   - for api `/path/to/yii-application/api/web/` and using the URL `http://api.dev/`

   For Apache it could be the following:

       <VirtualHost *:80>
           ServerName frontend.dev
           ServerAlias 127.0.0.1
           DocumentRoot /path/to/yii-application/frontend/web/
           
           <Directory "/path/to/yii-application/frontend/web/">
               # use mod_rewrite for pretty URL support
               RewriteEngine on
               # If a directory or a file exists, use the request directly
               RewriteCond %{REQUEST_FILENAME} !-f
               RewriteCond %{REQUEST_FILENAME} !-d
               # Otherwise forward the request to index.php
               RewriteRule . index.php
           </Directory>
       </VirtualHost>
       
       <VirtualHost *:80>
           ServerName backend.dev
           ServerAlias 127.0.0.1
           DocumentRoot /path/to/yii-application/backend/web/
           
           <Directory "/path/to/yii-application/backend/web/">
               # use mod_rewrite for pretty URL support
               RewriteEngine on
               # If a directory or a file exists, use the request directly
               RewriteCond %{REQUEST_FILENAME} !-f
               RewriteCond %{REQUEST_FILENAME} !-d
               # Otherwise forward the request to index.php
               RewriteRule . index.php
           </Directory>
       </VirtualHost>
	   
	   <VirtualHost *:80>
           ServerName api.dev
           ServerAlias 127.0.0.1
           DocumentRoot /path/to/yii-application/api/web/
           
           <Directory "/path/to/yii-application/api/web/">
               # use mod_rewrite for pretty URL support
               RewriteEngine on
               # If a directory or a file exists, use the request directly
               RewriteCond %{REQUEST_FILENAME} !-f
               RewriteCond %{REQUEST_FILENAME} !-d
               # Otherwise forward the request to index.php
               RewriteRule . index.php
           </Directory>
       </VirtualHost>

   For nginx:

       server {
           charset utf-8;
           client_max_body_size 128M;
       
           listen 80; ## listen for ipv4
           #listen [::]:80 default_server ipv6only=on; ## listen for ipv6
       
           server_name frontend.dev;
           root        /path/to/yii-application/frontend/web/;
           index       index.php;
       
           access_log  /path/to/yii-application/log/frontend-access.log;
           error_log   /path/to/yii-application/log/frontend-error.log;
       
           location / {
               # Redirect everything that isn't a real file to index.php
               try_files $uri $uri/ /index.php?$args;
           }
       
           # uncomment to avoid processing of calls to non-existing static files by Yii
           #location ~ \.(js|css|png|jpg|gif|swf|ico|pdf|mov|fla|zip|rar)$ {
           #    try_files $uri =404;
           #}
           #error_page 404 /404.html;
       
           location ~ \.php$ {
               include fastcgi_params;
               fastcgi_param SCRIPT_FILENAME $document_root/$fastcgi_script_name;
               fastcgi_pass   127.0.0.1:9000;
               #fastcgi_pass unix:/var/run/php5-fpm.sock;
               try_files $uri =404;
           }
       
           location ~ /\.(ht|svn|git) {
               deny all;
           }
       }
        
       server {
           charset utf-8;
           client_max_body_size 128M;
       
           listen 80; ## listen for ipv4
           #listen [::]:80 default_server ipv6only=on; ## listen for ipv6
       
           server_name backend.dev;
           root        /path/to/yii-application/backend/web/;
           index       index.php;
       
           access_log  /path/to/yii-application/log/backend-access.log;
           error_log   /path/to/yii-application/log/backend-error.log;
       
           location / {
               # Redirect everything that isn't a real file to index.php
               try_files $uri $uri/ /index.php?$args;
           }
       
           # uncomment to avoid processing of calls to non-existing static files by Yii
           #location ~ \.(js|css|png|jpg|gif|swf|ico|pdf|mov|fla|zip|rar)$ {
           #    try_files $uri =404;
           #}
           #error_page 404 /404.html;
       
           location ~ \.php$ {
               include fastcgi_params;
               fastcgi_param SCRIPT_FILENAME $document_root/$fastcgi_script_name;
               fastcgi_pass   127.0.0.1:9000;
               #fastcgi_pass unix:/var/run/php5-fpm.sock;
               try_files $uri =404;
           }
       
           location ~ /\.(ht|svn|git) {
               deny all;
           }
       }

	   server {
           charset utf-8;
           client_max_body_size 128M;
       
           listen 80; ## listen for ipv4
           #listen [::]:80 default_server ipv6only=on; ## listen for ipv6
       
           server_name api.dev;
           root        /path/to/yii-application/api/web/;
           index       index.php;
       
           access_log  /path/to/yii-application/log/api-access.log;
           error_log   /path/to/yii-application/log/api-error.log;
       
           location / {
               # Redirect everything that isn't a real file to index.php
               try_files $uri $uri/ /index.php?$args;
           }
       
           # uncomment to avoid processing of calls to non-existing static files by Yii
           #location ~ \.(js|css|png|jpg|gif|swf|ico|pdf|mov|fla|zip|rar)$ {
           #    try_files $uri =404;
           #}
           #error_page 404 /404.html;
       
           location ~ \.php$ {
               include fastcgi_params;
               fastcgi_param SCRIPT_FILENAME $document_root/$fastcgi_script_name;
               fastcgi_pass   127.0.0.1:9000;
               #fastcgi_pass unix:/var/run/php5-fpm.sock;
               try_files $uri =404;
           }
       
           location ~ /\.(ht|svn|git) {
               deny all;
           }
       }

Note: If your project is installed in a root then remove /yati from htaccess. If it's in a subfolder then replace /yati with your folder name.


5. Change the hosts file to point the domain to your server.

   - Windows: `c:\Windows\System32\Drivers\etc\hosts`
   - Linux: `/etc/hosts`

   Add the following lines:

   ```
   127.0.0.1   frontend.dev
   127.0.0.1   backend.dev
   127.0.0.1   api.dev
   ```

6. Update composer.
   ```
   php composer update
   ```

7. Set a cookie validation key in frontend and backend main-local.php. If it is already set then make sure to change it.


To login into the application, you need to first sign up, with any of your email address, username and password.
Then, you can login into the application with same email address and password at any time.

All the suggestions and complaints are welcome!


Comparison
----------

The following table compares the difference among the advanced template, basic template and YATI:


| Feature  |  Basic  |  Advanced |  YATI |
|---|:---:|:---:|:---:|
| Project structure | ✓ | ✓ | ✓ |
| Site controller | ✓ | ✓ | ✓ |
| User login/logout | ✓ | ✓ | ✓ |
| Forms  | ✓ | ✓ | ✓ |
| DB connection  | ✓ | ✓ | ✓ |
| Console command  | ✓ | ✓ | ✓ |
| Asset bundle  | ✓ | ✓ | ✓ |
| Codeception tests  | ✓ | ✓ | ✓ |
| Twitter Bootstrap  | ✓ | ✓ | ✓ |
| Front-end and back-end apps  |    | ✓ | ✓ |
| Ready to use User model |    | ✓ | ✓ |
| User signup and password restore  |     | ✓ | ✓ |
| Pretty Url |     |     | ✓ |
| REST API |     |     | ✓ |
| API versioning ready |     |     | ✓ |
| XML or JSON response formatting |     |     | ✓ |
| Custom error handling |     |     | ✓ |


Current Branches-
------------------

master - Stable as much as possible

dev-master - This is where we generally do the development


Troubleshooting
---------------

1. My Composer Update is not working.

Make sure to run this in your terminal-
composer global require "fxp/composer-asset-plugin:^1.3.1"

2. I am still having issue with setting it up.

Feel free to contact me or open an issue here.
