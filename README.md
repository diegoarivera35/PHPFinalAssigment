<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Portfolio Backend

This repository contains the backend code for a portfolio application built using Laravel. The application allows users to manage projects and the technologies associated with them. There are two entities related through a bridging table named project_technology.

## Challenges

During the execution of the project, there were some challenges regarding the routes and controllers of the entities. One of them was the route that generates all the other routes, which was generating an error preventing the app from creating or updating new projects or technologies. The second challenge consisted of using the controller functions to update and create new elements. While the code was correct, the functionality was not working. In order to complete the project, I'm still working on fixing these errors to have the full capabilities of the app working.

## Features

- **Projects Management**: Add, edit, and delete projects.
- **Technologies Management**: Add, edit, and delete technologies.
- **Trash Functionality**: Move projects and technologies to the trash, and restore or permanently delete them.
- **Authentication**: Secure access with authentication and email verification.

## Technologies Used

- **Laravel**: Backend framework
- **MySQL**: Database
- **TailwindCSS**: Styling
- **Alpine.js**: Interactivity
- **Vite**: Build tool
- **Axios**: HTTP client for API requests

## Setup

1. Clone the repository:
    ```bash
    git clone https://github.com/diegoarivera35/PortfolioBackend.git
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

3. Run migrations:
    ```bash
    php artisan migrate
    ```

4. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

- Access the application at `http://localhost:8000`
- Register or login to manage projects and technologies.

## Routes

- **Dashboard**: `/dashboard` - Main dashboard after login
- **Projects**: `/projects` - CRUD operations for projects
- **Technologies**: `/technologies` - CRUD operations for technologies
- **Profile**: `/profile` - Edit user profile

## Controllers

- **ProjectController**: Manages CRUD operations for projects
- **TechnologyController**: Manages CRUD operations for technologies

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
