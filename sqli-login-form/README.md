# SQL Injection Login Form

This project simulates a vulnerable login form to demonstrate SQL Injection (SQLi) for educational purposes. It is designed for students to practice identifying and exploiting SQL injection vulnerabilities in a controlled environment.

## Project Structure

```
sqli-login-form
├── Dockerfile
├── docker-compose.yml
├── src
│   ├── index.php
│   └── db.php
└── README.md
```

## Setup Instructions

1. **Clone the Repository**
   Clone this repository to your local machine using:
   ```
   git clone <repository-url>
   ```

2. **Navigate to the Project Directory**
   Change into the project directory:
   ```
   cd sqli-login-form
   ```

3. **Build and Run the Docker Containers**
   Use Docker Compose to build and run the application:
   ```
   docker-compose up --build
   ```

4. **Access the Application**
   Open your web browser and navigate to `http://localhost:8080` to access the login form.

## Usage

- The application presents a simple login form where users can input their credentials.
- Students can experiment with various SQL injection techniques by manipulating the input fields.
- The application is intentionally vulnerable to demonstrate how SQL injection can be exploited.

## Important Notes

- This project is intended for educational purposes only. Do not use it in a production environment.
- Ensure that you have Docker and Docker Compose installed on your machine before running the application.

## License

This project is licensed under the MIT License.