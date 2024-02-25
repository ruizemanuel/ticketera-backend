# Backend de Ticketera App

Este proyecto es el backend desarrollado en Laravel 10 para complementar el proyecto de Ticketera. Aquí encontrarás información sobre las principales características del backend, cómo instalarlo, ejecutarlo y la configuración necesaria.

URL del proyecto: https://ticketera-emanuelruiz.netlify.app/
URL del repositorio del frontend: https://github.com/ruizemanuel/ticketera-frontend

## Características

- **RESTful API:** Proporciona una API RESTful para la lectura, creación y modificación de tickets. Además ofrece endpoints dedicados para filtrar los mismos por fecha, estado y nivel de dificultad.

- **Base de datos:** Utiliza una base de datos MySQL a través de Laravel Eloquent para almacenar los tickets.


## Requisitos Previos 

Asegúrate de tener las siguientes herramientas y dependencias instaladas en tu sistema antes de ejecutar el backend: 

- [XAMPP](https://www.apachefriends.org/es/index.html) (instalará MySQL y PHP)
- [Composer](https://getcomposer.org/)

## Ejecutar el Backend

1. Clonar o descargar el proyecto.
2. Abre XAMPP y ejecuta Apache y MYSQL.
3. Abre una terminal en Visual Studio Code o utiliza tu terminal preferida.
4. Instala las dependencias utilizando composer:
`composer install`
5. Ejecuta las migraciones para crear la base de datos con sus correspondientes tablas:
`php artisan migrate`
6. Ejecuta el backend con el siguiente comando:
`php artisan serve`
7. Haz peticiones a la API mediante http://localhost:8000/api/v1/tickets


## Autor

👤 **Ruiz, Jose Emanuel**

* GitHub: [ruizemanuel](https://github.com/ruizemanuel)
