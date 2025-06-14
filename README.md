# My PHP Project

This project is a PHP application that uses a MySQL database. It is set up to run in a development container using Docker.

## Project Structure

```
my-php-project
├── .devcontainer
│   ├── devcontainer.json
│   └── docker-compose.yml
├── src
│   ├── index.php
│   └── config
│       └── database.php
├── composer.json
└── README.md
```

## Getting Started

To get started with this project, follow these steps:

1. **Clone the repository**:
   ```
   git clone <repository-url>
   cd my-php-project
   ```

2. **Open in VS Code**:
   Open the project in Visual Studio Code.

3. **Install the Development Container**:
   When prompted, reopen the project in the development container. This will set up the environment with PHP and MySQL.

4. **Access the Application**:
   Once the container is running, you can access the application at `http://localhost:8000`.

## Configuration

### Database Configuration

The database connection settings can be found in `src/config/database.php`. Make sure to update the database credentials as needed.

### Dependencies

This project uses Composer for dependency management. You can install the required dependencies by running:
```
composer install
```

## Usage

To run the application, navigate to the `src` directory and execute:
```
php -S localhost:8000
```

## License

This project is licensed under the MIT License. See the LICENSE file for more details.