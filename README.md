YATI (Yii2 Advanced Template Improved)
======================================
YATI is a pre-configured Yii2 advanced application template.

The default Yii2 Advanced application template does not comes with all the necessary configurations which we really need during
 development or production, we have to put lots of efforts. 
 
Why should you do that? Why waste your time setting up everything from environments to pretty URL and API structure if you can get it already done for you?
 
To minimize these efforts and make your devlopment easy and painless, we are presenting <strong>YATI</strong>. It includes all the necessary configurations and environments out of the box which will save plenty of your time.


If you have any suggestions or complaints, feel free to email me at- pankaj [at] foqat [dot] com


Why YATI?
---------
1. Pretty URLs enabled for both frontend and backend.
2. Managed Configurations according to 'dev' and 'prod' environement
3. Backend can be accessed by /admin.
4. Gii is enabled for frontend and backend only for 'dev'.
5. Debug bar is enabled for frontend and backend only for 'dev'.
6. RESTful API structure and API versioning is configured.
7. JSON formatter is enabled out of the box.
8. /web/ is removed from the URL for backend, frontend and api folder structure.

All above features can save hours of work and frustration .


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


## Run composer update.
   ```
   php composer update
   ```
   
## Preparing application

After you have downloaded or ran git clone, you have to follow below steps to initialize the installed application.
1. Explore the environments directory and change your desired configuration files according to environment. for example if
you are starting development then set configurations in the files given in `environment/dev` directory.

Yii2 provides full control over application configurations. If you wish to apply a configuration globally on backend and frontend the you have
to put it in common confgurations and if you wish to manage different configurations for backend and frontend then you can set them seperatly in
backend and frontend configurations.

2. Execute the `init` command and select `dev` as environment.

   ```
   php /path/to/yii-application/init
   ```

   Otherwise, in production execute `init` in non-interactive mode.

   ```
   php /path/to/yii-application/init --env=Production --overwrite=All
   ```

3. To connect your application to a database, change the configurations of `db` component in `environments/dev/common/config/main-local.php` accordingly.

4. Apply migrations with console command `yii migrate`.

Note: If your project is installed in a root then remove /yati from `enviroments/dev/.htaccess`. If it is in a subfolder then replace /yati with your folder name.

5. Set a cookie validation key in frontend and backend main-local.php. If it is already set then make sure to change it.

For Server configuration see [server_configurations.md](server_configurations.md)

For List of commonly used plugins in Yii2 applications see [list of plugins](plugins.md)

You are done!!!

To login into the application, you need to first sign up, with any of your email address, username and password.
Then, you can login into the application with same username and password at any time.


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
