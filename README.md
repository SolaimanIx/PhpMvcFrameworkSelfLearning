# EL Framework - Self Learning - PHP MVC Framework

A powerful and flexible MVC framework for building interactive web applications in PHP.

## Overview

EL Framework is a custom PHP MVC framework designed to provide a robust foundation for building modern web applications. It follows the Model-View-Controller architectural pattern and includes features like routing, middleware, and database migrations.

## Requirements

- PHP >= 8.3
- Composer

## Project Structure

```
mvc-elframework/
├── app/                  # Application code
├── config/              # Configuration files
├── elframework/         # Core framework files
├── migrations/          # Database migrations
├── public/             # Public directory (web root)
├── routes/             # Route definitions
│   ├── api.php         # API routes
│   └── web.php         # Web routes
└── composer.json       # Composer dependencies
```

## Features

### Routing System
- Support for GET, POST and other HTTP methods
- Route grouping with prefixes
- Route parameters and wildcards
- Controller-based routing
- Closure-based routing



### MVC Architecture
- Organized code structure following MVC pattern
- Controller-based action handling
- View rendering system
- Model layer for database interactions

### Additional Features
- PSR-4 autoloading
- Configuration management
- Database migrations support
- API routing capabilities

## Installation

1. Clone the repository
2. Run `composer install`
3. Configure your web server to point to the `public` directory
4. Set up your environment configuration

## License

This project is licensed under the MIT License.

## Author

SolaimanIX
