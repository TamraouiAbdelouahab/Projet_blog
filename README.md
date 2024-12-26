# Projet_blog

Follow these steps to set up and run the **Projet_blog** application on your local machine:

## Clone the Project:

1. Clone the repository and navigate to the project directory:

    ```bash
    git clone https://github.com/TamraouiAbdelouahab/Projet_blog.git
    cd Projet_blog
    ```

2. Go to the `app` directory:

    ```bash
    cd app
    ```

## Install Dependencies:

3. Install PHP dependencies using Composer:

    ```bash
    composer install
    ```

4. Set up the environment configuration:

    ```bash
    cp .env.example .env
    ```

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```
6. generate permission and Roles
    ```bash
    composer require spatie/laravel-permission
    ```

## Set Up the Database:

6. Run the database migrations:

    ```bash
    php artisan migrate
    ```

7. Seed the database with initial data (if required):

    ```bash
    php artisan db:seed
    ```

## Install Frontend Dependencies:

8. Install Node.js dependencies:

    ```bash
    npm install
    ```

9. Build the frontend assets:

    ```bash
    npm run build
    ```

10. (Optional) Start the development server for live updates:

    ```bash
    npm run dev
    ```

## Run the Application:

11. Serve the application:

    ```bash
    php artisan serve
    ```

## Comptes 

### Admin 

- login : admin@gmail.com
- password : admin


Your application should now be running! Open your browser and navigate to the local development server URL provided in the terminal (usually `http://127.0.0.1:8000`).
