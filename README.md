### php_Practicaltest
# PHP CRUD Application

## Introduction
This is a simple PHP-based CRUD (Create, Read, Update, Delete) application with authentication features. It allows users to register, log in, and manage their data through a web interface.

## Features
- User authentication (Register, Login, Logout)
- Create, Read, Update, and Delete operations
- MySQL database integration

## Requirements
- PHP 7.4 or higher
- MySQL database
- Apache or any compatible web server
- Composer (optional, if dependencies are required)

## Installation
### 1. Clone the Repository
```sh
git clone <repository_url>
cd PHP-practical-CRUD
```

### 2. Set Up the Database
- Import the `crud.sql` file into your MySQL database using phpMyAdmin or the MySQL CLI:
```sh
mysql -u your_user -p your_database < crud.sql
```
- Update the `config.php` file with your database credentials:
```php
$servername = "localhost";
$username = "your_user";
$password = "your_password";
$dbname = "your_database";
```

### 3. Run the Application
- Start your Apache server and navigate to the project directory.
- Open the application in your browser: `http://localhost/PHP-practical-CRUD/`

## Usage
- Register a new user.
- Log in using your credentials.
- Perform CRUD operations on the available data.

## License
This project is open-source and available under the MIT License.

