# Customer Order API

A RESTful API for managing customers and their orders built with Laravel.

## Project Overview

This API provides endpoints to manage customer orders, including creating, listing, and updating orders, as well as retrieving order statistics. The project follows a repository pattern architecture for better separation of concerns and testability.

## Features

- Create, list, and update orders
- Get order statistics
- Repository pattern implementation
- Request validation
- Resource transformations
- Proper error handling

## Tech Stack

- **Framework**: Laravel 10.x
- **Database**: MySQL
- **Testing Tool**: Included test-api.html for easy API testing

## Database Schema

### Customers Table
- `id` - Primary key
- `name` - Customer name
- `email` - Customer email (unique)
- `timestamps` - Created at and updated at timestamps

### Orders Table
- `id` - Primary key
- `customer_id` - Foreign key to customers table
- `product_name` - Name of the product
- `quantity` - Number of items ordered
- `price` - Price of the order
- `status` - Order status (pending, shipped)
- `timestamps` - Created at and updated at timestamps

## API Endpoints

| Method | Endpoint        | Description                   |
|--------|-----------------|-------------------------------|
| GET    | /api/orders     | Get all orders                |
| POST   | /api/orders     | Create a new order            |
| PUT    | /api/orders/{id}| Update an existing order      |
| GET    | /api/orders/stats | Get order statistics        |

## Project Structure

The project follows a repository pattern with the following components:

- **Controllers**: Handle HTTP requests and responses
- **Models**: Represent database tables and relationships
- **Repositories**: Implement data access logic
- **Services**: Contain business logic
- **Resources**: Transform data for API responses
- **Requests**: Validate incoming data

## Environment Setup

1. Clone the repository
2. Copy `.env.example` to `.env` and configure your database settings
3. Run `composer install`
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Run `php artisan serve` to start the development server

## Testing the API

You can use the included `test-api.html` file to test the API endpoints. Open it in a browser and:

1. Set the base URL (default: http://localhost:8000/api)
2. Use the interface to send requests to the different endpoints
3. View the JSON responses in the response containers

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
