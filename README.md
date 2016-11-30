# Phalcon Basic Auth

1. Config Database: app/config/config.php

  ```php
  'database'    => [
      'adapter'  => 'Mysql',
      'host'     => 'localhost',
      'username' => 'root',
      'password' => '',
      'dbname'   => 'phalcon_basic_auth',
      'charset'  => 'utf8'
  ],
  ```

2. Create Database

    ```sql
    CREATE DATABASE phalcon_basic_auth CHARACTER SET utf8 COLLATE utf8_general_ci;
    ```

3. Create User Tables & Migration

  ```sql
  CREATE TABLE `phalcon_basic_auth`.`users`
  (
      `id` INT NOT NULL AUTO_INCREMENT ,
      `email` VARCHAR(250) NOT NULL ,
      `username` VARCHAR(50) NOT NULL ,
      `password` VARCHAR(250) NOT NULL ,
      `first_name` VARCHAR(50) NOT NULL ,
      `last_name` VARCHAR(50) NOT NULL ,
      `active` INT(1) NOT NULL ,
      PRIMARY KEY (`id`)
  ) ENGINE = InnoDB;
  ```

  ```php
  phalcon migration generate
  ```

4. Generate Controller AuthController

  ```php
  phalcon controller auth
  ```

5. Coding AuthController using Default Route

  ```php
  'auth/login'           => AuthController::login
  'auth/postLogin'       => AuthController::postLogin
  'auth/register'        => AuthController::register
  'auth/postRegister'    => AuthController::postRegister
  'auth/logout'          => AuthController::logout
  ```

6. Coding Auth Views with Volt template

7. Generate & Code Users Model for Auth

  ```php
  phalcon model users
  ```
  
****

Ok now let's test it:
- [http://localhost/phalcon_basic_auth/auth/register](http://localhost/phalcon_basic_auth/auth/register)
- [http://localhost/phalcon_basic_auth/auth/login](http://localhost/phalcon_basic_auth/auth/login)
- [http://localhost/phalcon_basic_auth/auth/logout](http://localhost/phalcon_basic_auth/auth/logout)
