# Employment Management API

This is a Laravel-based API for managing employee records, user authentication, and profiles. It provides endpoints for user registration, login, and CRUD operations on employee data.

## Features

- **User Registration:** Register new users.
- **User Login:** Authenticate users and issue tokens.
- **User Logout:** Revoke user tokens.
- **Employee Management:** Perform CRUD operations on employee records.

## Routes

### Authentication

- **Register User**
  - `POST /register`
  - Registers a new user.
- **Login User**
  - `POST /login`
  - Authenticates a user and returns a token.
- **Logout User**
  - `POST /logout`
  - Logs out the authenticated user and revokes the token.

### Employee Management (Authenticated)

- **List Employees**
  - `GET /employee`
  - Retrieves a list of employees.
- **Create Employee**
  - `POST /employee`
  - Creates a new employee record.
- **Show Employee**
  - `GET /employee/{employee}`
  - Retrieves a specific employee record.
- **Update Employee**
  - `PUT /employee/{employee}`
  - Updates a specific employee record.
- **Delete Employee**
  - `DELETE /employee/{employee}`
  - Deletes a specific employee record.

## Installation

1. **Clone the Repository**

   ```bash
   git clone <repository-url>
   ```

2. **Install Dependencies**

   ```bash
   cd <repository-folder>
   composer install
   npm install
   ```

3. **Set Up Environment**

   Copy the `.env.example` file to `.env` and configure your environment settings.

   ```bash
   cp .env.example .env
   ```

4. **Generate Personal Access  Key**

   ```bash
    php artisan passport:client --personal
   ```

5. **Add Passport Configuration**
    ```dotenv
    PASSPORT_PERSONAL_ACCESS_CLIENT_ID="client-id-value"
    PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET="unhashed-client-secret-value"
    ```
   
6. **Run Migrations**

   ```bash
   php artisan migrate
   ```

7. **Start the Server**

   ```bash
   php artisan serve
   ```

## Usage

- Use Postman or any API client to interact with the API endpoints.
- Include the Bearer token in the Authorization header for routes protected by authentication.

## Contributing

Contributions are welcome! Please refer to the `CONTRIBUTING.md` file for guidelines on how to contribute.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Feel free to modify or expand this README based on additional details or requirements for your project!
