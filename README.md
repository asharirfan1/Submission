# Laravel Project

## Introduction

Simple Laravel API with Job Queue, Database, and Event Handling

## Prerequisites

- PHP (>= 8.3)
- Composer
- MySQL or another database supported by Laravel

# Getting Started

1. Installation process
    - run 'composer install'

2. branch
    - git checkout master
    - git pull origin master


3. Set up Environment
    - Copy .env.example to .env and configure your environment variables

4. Setup Database
    - make a new Database

    1. Set Database credentials in .env file.

    - DB_DATABASE=your_database_name
    - DB_USERNAME=your_database_user_name
    - DB_PASSWORD=your_database_password
    -
5. Migrate Database tables
    - run 'php artisan key:generate'
    - run 'php artisan migrate'
   
6. Run Development Server
    - run 'php artisan serve'
   
7. Jobs
    - run 'php artisan queue:Work' to make job work 
   
8. Test
   - run 'php artisan test' to make test work
