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

2. Navigate to that directory and run `composer update`.

   ``` shell
   cd ./mims-website
   composer update
   ```

   This will download and install all the necessary components to run
   the MIMS site.

## Database Setup ##

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
