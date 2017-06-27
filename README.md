Skyii (Starter Kit for Yii2)
============================
Skyii (pronounced as Sky) is a pre-configured Yii2 Advanced Template with a lot of features out of the box.

The default Yii2 Advanced Template does not provide all the necessary and development and production ready configurations. We have to put some efforts to get it ready.

Why would you do that? Why waste your time setting up everything from environments to pretty URL and API structure, if you can get it already done for you?

To minimize these efforts and make your development experience easy and painless, we created <strong>Skyii</strong>. It includes all the necessary configurations out of the box.

If you have any suggestions or complaints, feel free to open an issue here.

Why SKYII?
----------
1. Pretty URLs enabled for frontend, backend, API and modules.
2. Configurations managed according to 'dev' and 'prod' environment.
3. Backend can be accessed by /admin.
4. Gii is enabled for frontend and backend in 'dev' environment.
5. Debug bar is enabled for frontend and backend in 'dev' environment.
6. RESTful API structure and API versioning is configured.
7. JSON formatter for API response is enabled out of the box.
8. User module with ready to use RBAC (Role Based Access Control).

All above features can save hours of work and frustration.


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

1. Explore the environments directory and change your desired configuration files according to environment. For example if you are starting development then set configurations in the files given in `environment/dev` directory.

2. Yii2 provides full control over application configurations. If you wish to apply a configuration globally on backend and frontend then you have to put it in common configurations and if you wish to manage different configurations for backend and frontend then you can set them separately in respective configurations.

3. Execute the `init` command and select `dev` as environment.

   ```
   php /path/to/yii-application/init
   ```

   Otherwise, in production execute `init` in non-interactive mode.

   ```
   php /path/to/yii-application/init --env=Production --overwrite=All
   ```

4. To connect your application to a database, change the configurations of `db` component in `environments/dev/common/config/main-local.php` accordingly.

5. Apply migrations with console command `yii migrate`.

6. If your project is installed in a root directory then remove /yati from `enviroments/dev/.htaccess`. If it is in a subfolder then replace /yati with your folder name.

7. Set a cookie validation key in frontend and backend main-local.php. If it is already set then make sure to change it.

8. For Server configurations please see [server_configurations.md](server_configurations.md)

9. For List of commonly used and recommended plugins in Yii2, please see [list of plugins](plugins.md)

10. Finally update your composer.
   ```
   php composer update
   ```

You are Done!

To login into the application, you need to first sign up, with any of your email address, username and password. Then, you can login into the application with same username and password at any time.

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
| User module with RBAC |     |     | ✓ |


Current Branches
----------------

master - Always use this branch for your work.

dev-master - Should not be used as it may have broken changes


Contributors
------------

Pankaj Sanam

Rajat Jain

Troubleshooting
---------------

1. My Composer Update is not working.

    Make sure to run this in your terminal-
composer global require "fxp/composer-asset-plugin:^1.3.1"

2. I am still having issue with setting it up.

    Feel free to contact me or open an issue here.
