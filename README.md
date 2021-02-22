# GIRISOFT
GiriSoft is the perfect starter kit for building your next great idea!

Built using Laravel Voyager, GiriSoft will help you rapidly build your Software as a Service application. Out of the box Authentication, Subscriptions, Invoices, Announcements, User Profiles, API, and so much more!


GiriSoft has some cool features to help you rapidly build your Software as a Service.
Here are a few awesome features you're going to love!

#Authentication:
Fully loaded authentication, email verification, and password reset. Authentication in a snap!

#User Profiles:
Customizable user profiles. Allow your users to enter data and easily customize their user profiles.

#User Impersonation:
With user impersonations you can login as another user and resolve an issue or troubleshoot a bug.

#Subscriptions:
Allow users to pay for your service and signup for a subscription using Stripe or Braintree Payments.

#Subscription Plans:
Create new plans with different features and intrigue your users to subscribe to any plan.

#User Roles:
Grant user permissions based on roles, you can then assign a role to a specific plan.

#Notifications:
Ready-to-use Notification System which integrates with the default Laravel notification feature.

#Announcements:
Create user announcements to notify users about new features or updates in your application.

#Blog:
Equipped with a fully-functional blog. Write posts related to your product to gain free SEO traffic.

#Fully Functional API:
Ready-to-consume API for your application. Create API tokens with role specific permissions.

#Voyager Admin:
GiriSoft has been crafted using Laravel & Voyager, which makes administering your app a breeze!

#Customization: 
The most developer friendly & highly customizable HTML & HTML Laravel Admin Dashboard Template of 2021 !

Thanks for your interest in GiriSoft. 


#Installation CLI

composer installl

composer dump-autoload

php artisan migrate --database=system

php artisan db:seed

php artisan key:generate

php artisan storage:link

php artisan config:clear


#Generate webpush vapid

php artisan webpush:vapid


#Add in .env

WEBPUSH_DB_CONNECTION=system

WEBPUSH_DB_TABLE=push_subscriptions

BROADCAST_DRIVER=pusher


#RUN DEV SERVER:
php artisan serve


#Socket IO (Laravel Websocket):
php artisan websockets:serve


#SUPERVISOR TO RUN IN BACKGROUND WEBSOCKET
* add file with name websockets.conf:

vi /etc/supervisor/conf.d/websockets.conf

* add content on it:

[program:websockets]

command=/usr/bin/php /var/www/html/artisan websockets:serve

numprocs=1

autostart=true

autorestart=true

;user=laravel-echo

stdout_logfile=/var/www/html/websockets.log

* to update websocket:

supervisorctl update

* to start websocket:

supervisorctl start websockets

* to stop websocket:

supervisorctl stop websockets

Websocket config reff:
https://github.com/beyondcode/laravel-websockets/issues/92


#Create a new Tenant:

php artisan tenant:create demo.localhost
