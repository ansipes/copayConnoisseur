# This is copayConnoisseur

It is a web application that allows users to browser an array of copay saving cards. Here are some actions that a user can perform when using the app:

* Browse Copay Cards
* View Coupon Information
* Edit Copay Card Information
* Generate a barcode for retail scanning

## How to install

##### Clone the repository

Download the zip file of this repository, or clone it to a directory using:

`git clone https://github.com/ansipes/copayConnoisseur.git`

##### Start up your database/Server

I recommend that you use MAMP if you are on Mac. Set your mysql port to `8889`.

You'll need to create a database called `app`.

##### Create the tables

You have two choices here. You can start out with an empty version of this app, or you can import a table with a few cards in it.

To make a fresh install, navigate into the cloned directory and run:

`php artisan migrate`

This will create the `copays` table for you.

Otherwise, navigate to your phpMyAdmin interface, and import the `copays.sql` into the `app` database. This way, you will have a few cards to play with.

##### Start up the app

If you aren't there already, navigate to the cloned directory and run:

`npm run hot`

##### View the app

The app should now be live at `localhost:8888/`

Have fun!
