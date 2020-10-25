# Vue + Laravel Album-Management

<p align="center">
  <a href="https://vuejs.org/" alt="Built with: Vue: 2.6.11">
    <img src="https://badgen.net/badge/Built%20with/Vue%20v2.6.11/4FC08D" />
  </a>
  <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" alt="Powered by: Java Script">
    <img src="https://badgen.net/badge/Powered%20by/JavaScript/F6D854" />
  </a>
</p>
<p align="center">
  <a href="https://laravel.com/" alt="Built with: Laravel v8.11.2">
    <img src="https://badgen.net/badge/Built%20with/Laravel%20v8.11.2/FF2D20" />
  </a>
  <a href="https://www.php.net/downloads.php" alt="Powered by: PHP v7.4.5">
    <img src="https://badgen.net/badge/Powered%20by/PHP%20v7.4.5/8892BF" />
  </a>
</p>

## Assumptions

- I assumed that I was given a task to complete two independent applications because the requirements explicitly mention that I need to use the provided Json File as the source for the UI.

### Note: Since I had to get data from the json file, I had to store images somewhere in the frontend assets directory. In case the data is coming from the backend, the images need not to be stored in the frontend.

## Brief description and Introduction - UI

- The user can view a photographers profile along with his albums.
- Used axios to fetch data asynchronously.
- Used media queries for responsive design.

## Brief description and Introduction - RESTful API

- Custom Exception Handling (ModelNotFoundException, NotFoundHttpException, MethodNotAllowedHttpException)
- Migration and Seeding (Used for adding dummy data)
- Resources (Used for structured response)
- HATEOAS (Used for easy navigation)

## Features

- User can view a photographer's albums using the following link (**main requirement**):

  http://127.0.0.1:8000/api/photographers/1/albums

- User can view all photographers.
- User can view one photographer by ID.
- User can view all albums.
- User can view one album by ID.
- User can view all photos.
- User can view one photo by ID.
- User can view photographer's albums along with album's photos.
- User can view an album's photos.

## Few Endpoints for testing

| Description                                    | Payload                                                   | HTTP Methods |
| ---------------------------------------------- | --------------------------------------------------------- | ------------ |
| Get photographer's albums:                     | http://127.0.0.1:8000/api/photographers/1/albums          | GET          |
| Get all photographer:                          | http://127.0.0.1:8000/api/photographers                   | GET          |
| Get a photographer by ID:                      | http://127.0.0.1:8000/api/photographers/1                 | GET          |
| Get all albums:                                | http://127.0.0.1:8000/api/albums                          | GET          |
| Get an albums by ID:                           | http://127.0.0.1:8000/api/albums/1                        | GET          |
| Get all photos:                                | http://127.0.0.1:8000/api/photos                          | GET          |
| Get a photo by ID:                             | http://127.0.0.1:8000/api/photos/1                        | GET          |
| Get a photographer's albums along with photos: | http://127.0.0.1:8000/api/photographers/1/albums/1/photos | GET          |
| Get a album's photos:                          | http://127.0.0.1:8000/api/albums/1/photos                 | GET          |

## Installation and Requirements

### UI

1. Install [Node](https://nodejs.org/en/download/)
2. Install [Vue](https://cli.vuejs.org/guide/installation.html)
3. Install [Composer](https://getcomposer.org/download/)
4. Install [Xampp](https://www.apachefriends.org/download.html)
5. Install [Postman](https://www.postman.com/downloads/)
6. Clone the repository.
7. Change directory to frontend.
8. Install all the dependencies using the following command:

```bash
npm install
```

6. Navigate to the root directory and run the following command inside the Terminal:

```bash
npm run serve
```

7. Change directory to backend.
8. Use Composer to install the required dependencies by navigating to the root directory of the cloned repository and run the following command inside the Terminal:

```bash
composer install
```

9. Rename the ".env.example" file in the root directory to ".env".
10. Generate the application key by running the following command:

```bash
php artisan key:generate
```

11. Run the following command inside the Terminal:

```bash
php artisan serve
```

12. Open Xampp and verify PhpMyAdmin is running.
13. Create a new database with name "album_management" using PhpMyAdmin.
14. Add the fake data by running the following commands inside the Terminal:

```bash
php artisan migrate
php artisan db:seed
```
