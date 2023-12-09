# Jaggannath Project Installation Guide

## Overview

Jaggannath is a project built with Laravel and Vite, utilizing two separate Tailwind configurations for the backend and frontend. This guide provides instructions for installing and running the project.

## Stack

- Laravel
- Vite
- Tailwind CSS (2 configurations)

## Structure

The project structure is similar to a typical Laravel application.

## Libraries

- Laravel Framework
- Vite
- Tailwind CSS

## Prerequisites

- PHP >= 8.0
- Composer
- Node.js >= 16.0
- NPM

## Setup

1. **Clone the repository:**

    ```
    git clone https://github.com/abbasmashaddy72/jaggannath.git
    cd jaggannath
    ```

2. **Install Composer dependencies:**

    ```
    composer install
    ```

3. **Install Node.js dependencies:**

    ```
    npm install
    ```

## Configuration

### Tailwind

- `npm run dev` to compile css in local
- `npm run prod` to compile css for production

## Running the Project

- Start the development server:

    ```
    npm run dev
    ```

- This will automatically connect to Laravel, for css at http://localhost:3000.

## Build for Production

- To compile CSS for production, use the following command:

```
npm run prod
```

## Commands

- `npm run dev`: Starts the development server for both backend and frontend.
- `php artisan serve`: Starts the Laravel development server.

## Contact
For questions or support, feel free to contact the project author or open an issue on the project's GitHub repository.
