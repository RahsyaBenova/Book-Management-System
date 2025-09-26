<a id="readme-top"></a>

<br />
<div align="center">
  <img src="assets/dist/img/favicon.ico" alt="Logo" width="100" height="100">

  <h3 align="center">Book Management System</h3>

  <p align="center">
    A simple web-based application to manage books with user and admin panels
    <br />
    <a href="https://github.com/RahsyaBenova/book-management-system"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/RahsyaBenova/book-management-system">View Demo</a>
    ·
    <a href="https://github.com/RahsyaBenova/book-management-system/issues/new?labels=bug&template=bug-report---.md">Report Bug</a>
    ·
    <a href="https://github.com/RahsyaBenova/book-management-system/issues/new?labels=enhancement&template=feature-request---.md">Request Feature</a>
  </p>
</div>

---

## About The Project

![Dashboard Screenshot](assets/dist/img/dashboard.png)

The **Book Management System** is a Laravel + Livewire application with a modern UI for users and a FilamentPHP admin panel for administrators.

---

## Built With

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/Livewire-4B32C3?style=for-the-badge&logo=livewire&logoColor=white" />
  <img src="https://img.shields.io/badge/TailwindCSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/FilamentPHP-0088CC?style=for-the-badge&logo=php&logoColor=white" />
</p>

---

## Installation


1. Clone the repository

   ```sh
   git clone https://github.com/RahsyaBenova/book-management-system-System.git

2. Navigate to the project directory
   ```sh
   cd book-management-system-System
3. Install frontend dependencies
   ```sh
   npm install && npm run dev
4. Install PHP dependencies
   ```sh
   composer install
5. Copy environment file
   ```sh
   cp .env.example .env
6. Generate application key
   ```sh
   php artisan key:generate
7. Create a new database and update .env file
9. Run migrations and seeders or just use the exist database
   ```sh
   php artisan migrate --seed
10. Start the local development server
    ```sh
    php artisan serve
Access the app:

User Dashboard: http://127.0.0.1:8000/

Admin Panel: http://127.0.0.1:8000/miaw

<p align="right">(<a href="#readme-top">back to top</a>)</p> 

<!-- FEATURES -->
Features

User Authentication: Register, login, and secure access for users.
![User Authentication](assets/dist/img/auth.png)

Book Management (CRUD): Add, view, update, and delete books.
![CRUD](assets/dist/img/crud.png)

User Dashboard: Interactive Livewire-based dashboard with book statistics.
![Dashboard Screenshot](assets/dist/img/dashboard.png)

Admin Panel: FilamentPHP admin panel for superadmin to manage all resources.
![Panel](assets/dist/img/panel.png)

<p align="right">(<a href="#readme-top">back to top</a>)</p> 
<!-- ACKNOWLEDGMENTS -->
Acknowledgments

Laravel Documentation

Livewire Docs

FilamentPHP

TailwindCSS Docs

<p align="right">(<a href="#readme-top">back to top</a>)</p> <!-- MARKDOWN LINKS & IMAGES -->