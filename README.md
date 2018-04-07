<!-- -*- mode: gfm; -*- -->

# MIMS Website #

## Description ##

This repository houses the code for the MIMS website, found at
[csi4999mims.online](https://csi4999mims.online).  The website is
based on the [CakePHP 3.x](https://cakephp.org/) framework.

## Environment Requirements ##

There are a few prerequisites required in order to use this project's
code.  They are the same requirements found on [CakePHP's
website](https://book.cakephp.org/3.0/en/installation.html).  Here is
a brief summary of those requirements in order to create a testing
environment:

1. An installation of [PHP][php]
2. An installation of git
3. A MySQL (or [similar][cake-supported-databases]) installation with
   the ability to create databases and grant access to those databases
4. An installation of [`composer`][composer]

[php]: https://secure.php.net/
[cake-supported-databases]: https://book.cakephp.org/3.0/en/orm/database-basics.html#supported-databases
[composer]: https://getcomposer.org/

## Cloning and Updating the Repository ##

1. Clone the repository to a directory of your choice.

   ``` shell
   git clone https://github.com/csi4999-mims/Website.git ./mims-website
   ```

2. Navigate to that directory and run `composer update` to download
   and install all the required libraries.

   ``` shell
   cd ./mims-website
   composer update
   ```

## Database Setup ##

### Create the databases ###

1. Create two empty databases, one for production data and another for
   test data.  These might have names like `mims` and `mims_test`.

   ``` sql
   CREATE DATABASE `mims`;
   CREATE DATABASE `mims_test`;
   ```

2. Grant all privileges on these databases to a user (or a pair of
   users), and give these user(s) a password.

   ``` sql
   GRANT ALL PRIVILEGES ON `mims`.* TO 'cake_user'@'localhost'
       IDENTIFIED BY 'someSecretPassword';

   GRANT ALL PRIVILEGES ON `mims_test`.* TO 'cake_test_user'@'localhost'
       IDENTIFIED BY 'someSecretTestPassword';
   ```

### Connect CakePHP to the databases ###

1. Navigate to the `config/` directory and create a copy of
   `app.default.php` and name it `app.php`.
2. Edit the `default` and `test` sections of `Datasources` in
   `app.php` to match your database settings you set in the previous
   section.  For example:

   ``` php
    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            'username' => 'cake_user',
            'password' => 'someSecretPassword',
            'database' => 'mims',
		    // ...
		],
        'test' => [
            'host' => 'localhost',
            'username' => 'cake_test_user',
            'password' => 'someSecretTestPassword',
            'database' => 'mims_test',
			// ...
   ```

### Migrate the database schema ###

In a terminal, navigate to the root of the project folder and run the
following command:

``` shell
bin/cake migrations migrate
```

This will work its way through the list of migrations and update your
database schema accordingly.

If you run into any issues during this process, or want to know the
status of the migrations, you can use the following command:

``` shell
bin/cake migrations status
```

### Add seed data to the database ###

To add test data to your database, run the following commands in a
terminal from the root of the project.  (The order is important, and
this should **not** be done in a production environment.)

``` shell
bin/cake migrations seed --seed=UserSeeder
bin/cake migrations seed --seed=ReportsSeeder
bin/cake migrations seed --seed=CommentsSeeder
```

This will first add test users to your system, all with the password
of `password`.  It will then add reports based on those users, then
add comments to those reports.  All the data will be linked together.

### Clearing the database ###

If you wish to clear out the database of all the information, you can
do so with the truncation files.  **These will delete anything and
everything in their respective tables**, so only run them if you know
you do not need the data that is currently stored there.

They are run in reverse order of the seed files:

``` shell
bin/cake migrations seed --seed=CommentsTruncator
bin/cake migrations seed --seed=ReportsTruncator
bin/cake migrations seed --seed=UserTruncator
```

## Run the php server ##

You can use php's built-in web server functionality for dev testing,
*but this should not be used for production environments*.  For
production environments, you should use a fully-fledged web server
like Apache or nginx.  More details on this can be found in the
CakePHP documentation.

To run php's built-in web server, run the following command from the
root of the project:

``` shell
bin/cake server
```

Then, open a browser to the location specified in the output,
including the port number.  This should display the MIMS homepage,
where you can create an account and log in.
