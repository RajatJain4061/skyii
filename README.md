YATI (Yii2 Advanced Template Improved)
======================================
YATI is a skeleton for Yii2 which is inherited from Yii2 Advanced template. The default Yii2 Advanced template
is good but to make it production ready, you will have to put some efforts. Our aim is to minimize these efforts and make life easy.

Why YATI?
---------
1. Pretty URLs enabled for both frontend and backend.
2. Backend can be accessed by /admin.
3. Gii is enabled for frontend and backend.
4. Debug bar is enabled for frontend and backend.
5. General used extensions are pre-installed.

All above features can save hours of work and frustration of developers.


Pre-Installed-
---------------------
Yii2 Framework (2.0.11.2) - https://github.com/yiisoft/yii2

Advanced Template - https://github.com/yiisoft/yii2-app-advanced

Enhanced Gii - https://github.com/mootensai/yii2-enhanced-gii

mPDF - https://github.com/kartik-v/yii2-mpdf

Tree Manager - https://github.com/kartik-v/yii2-tree-manager

Collection - https://github.com/yii2mod/collection

Helpers - https://github.com/yii2mod/yii2-helpers

Kartik Helpers - https://github.com/kartik-v/yii2-helpers

Widget Alert - https://github.com/kartik-v/yii2-widget-alert

Sweet Alert - https://github.com/aryelds/yii2-sweet-alert

Password Validator - https://github.com/kartik-v/yii2-password

Domain Validator - https://github.com/dmitry-kulikov/yii2-domain-validator

At Least Validator - https://github.com/code-on-yii/yii2-at-least-validator

Date Time Compare Validator - https://github.com/nepstor/yii2-datetime-compare-validator

Black List Validator - https://github.com/chouaibi/yii2-blacklist-validator

Imagine - https://github.com/yiisoft/yii2-imagine

jQuery UI - https://github.com/yiisoft/yii2-jui

HTTP Client - https://github.com/yiisoft/yii2-httpclient

Imagick - https://github.com/tpmanc/yii2-imagick

Kartik Widgets - https://github.com/kartik-v/yii2-widgets

Kartik Date Range Picker - https://github.com/kartik-v/yii2-date-range

Kartik Sortable Input - https://github.com/kartik-v/yii2-sortable-input

Kartik Editable - https://github.com/kartik-v/yii2-editable

Scheduling - https://github.com/yii2mod/yii2-scheduling

Disable Submit Buttons - https://github.com/Faryshta/yii2-disable-submit-buttons

Admin LTE Template - https://github.com/almasaeed2010/AdminLTE

All of the above modules are already enabled in the config files. If you don't like any of them, simply remove them
from composer.json and run a composer update. Please read the respective documentation of above extensions to know their usage.


How to Install YATI?
--------------------
1. git clone https://github.com/foqat/yati.git
2. Set a cookie validation key in frontend and backend main-local.php.
3. If your project is installed in a root then remove /yati from htaccess. If it's in a subfolder then replace /yati with your folder name.
4. Run yii migrate if required.


We will try our best to keep YATI updated with latest stable Yii2 releases.

Your suggestions and complaints are welcome!


Troubleshooter
--------------

Problem: Composer Update is not working.

Solution: Make sure to run this in your terminal-
composer global require "fxp/composer-asset-plugin:^1.3.1"
