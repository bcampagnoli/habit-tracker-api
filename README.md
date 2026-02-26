# Habit Tracker API 🧠💪

A RESTful API built with Laravel to manage and track healthy habits.
This project provides a clean and scalable backend foundation for
applications that need to register, monitor, and analyze habit
consistency over time.

------------------------------------------------------------------------

# 📌 Purpose

The goal of this API is to enable web or mobile applications to:

-   Create and manage habits
-   Record daily progress
-   Track consistency and performance
-   Retrieve historical data

It can be used as the backend for productivity, wellness, or
routine-tracking apps.

------------------------------------------------------------------------

# 🚀 Features

-   Create habits
-   List habits
-   Update and delete habits
-   Record daily progress
-   View progress history
-   Ready for authentication integration (future enhancement)

------------------------------------------------------------------------

# 🛠️ Tech Stack

-   PHP 8+
-   Laravel
-   Eloquent ORM
-   Laravel Migrations & Seeders
-   Relational Database (MySQL, PostgreSQL, or SQLite)

------------------------------------------------------------------------

# ⚙️ Installation

## Clone the repository

git clone https://github.com/bcampagnoli/habit-tracker-api.git cd
habit-tracker-api

## Install dependencies

composer install

## Configure environment

cp .env.example .env

Update the .env file with your database credentials.

## Generate application key

php artisan key:generate

## Run migrations

php artisan migrate

## Start local server

php artisan serve

------------------------------------------------------------------------

# 📄 License

This project is licensed under the MIT License.
