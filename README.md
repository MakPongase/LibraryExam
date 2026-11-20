# Library Management System

## About the Project

This website or application was developed by John Mark Pongase as part of the technical assessment. The web functionality only consist of basic library system with simple CRUD.

## Features

- User registration
- Login and logout
- Protected book management
- Add, view, edit, and delete books
- Form validation
- Success and error messages
- Responsive Tailwind interface

## Technologies Used

- Laravel 12
- PHP 8
- SQLite
- Blade
- Tailwind CSS
- Vite

## Requirements

List the software needed:

- PHP
- Composer
- Node.js and npm
- SQLite support

## Installation

Write the commands you personally used:

1. Clone the repository.
2. Install Composer dependencies.
3. Install npm dependencies.
4. Copy `.env.example` to `.env`.
5. Generate the application key.
6. Configure SQLite.
7. Run migrations.
8. Start Vite.
9. Open the project through Herd or Laravel’s development server.

## Database Setup

Explain:

- Why you selected SQLite
- Where `database.sqlite` belongs
- Which `.env` value selects SQLite
- How migrations create the tables

## Running the Application

Explain which commands or Herd URL the evaluator should use.

## Project Decisions

In your own words, explain:

- Why you used SQLite
- Why authentication controllers are separated
- Why Books uses a resource controller
- Why you built functionality before styling
- Why Add, Edit, and Delete use different colors

## Testing

Describe the manual tests you performed:

- Registration
- Correct and incorrect login
- Logout
- Add book
- Validation errors
- Edit book
- Delete confirmation
- Unauthorized access to `/books`

## Screenshots

Add:

- Login page
- Book management page

## Resources

List the official documentation and tutorials you actually used.