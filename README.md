# SignUp/Login System

A simple PHP-based SignUp and Login system that allows users to register, log in, and manage their accounts. This project uses PHP, MySQL, and basic HTML/CSS for functionality and design.

## Features

- **User Registration**: Users can sign up with a username, email, and password.
- **Login System**: Users can log in using their credentials.
- **Error Handling**: Displays appropriate error messages for invalid inputs, such as:
    - "Fill in all the fields"
    - "Incorrect username or password"
    - "Email already in use"
- **Success Messages**: Displays success messages for actions like successful signup.
- **Session Management**: Uses PHP sessions to manage user authentication.

## Technologies Used

- **Backend**: PHP
- **Frontend**: HTML, CSS
- **Database**: MySQL
- **Server**: XAMPP (Apache)

## Installation

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/signup-login-system.git
```

### 2. Set Up XAMPP
- Install XAMPP.
- Start Apache and MySQL from the XAMPP control panel.

### 3. Import the Database
- Open phpMyAdmin (`http://localhost/phpmyadmin`).
- Create a new database (e.g., `signup_login_system`).
- Import the `database.sql` file from the project directory.

### 4. Configure the Database Connection
- Open `includes/db.inc.php`.
- Update the database credentials:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signup_login_system";
    ```

### 5. Run the Project
- Place the project folder in the `htdocs` directory of XAMPP.
- Open your browser and navigate to `http://localhost/SignUpLoginInSystem`.

## File Structure

```
SignUpLoginInSystem/
├── includes/
│   ├── db.inc.php          # Database connection file
│   ├── signup.inc.php      # Handles user signup logic
│   ├── login.inc.php       # Handles user login logic
│   ├── signup_view.inc.php # Displays signup form and errors
│   ├── login_view.inc.php  # Displays login form and errors
├── styles/
│   ├── style.css           # CSS for styling the forms and messages
├── index.php               # Homepage
├── signup.php              # Signup page
├── login.php               # Login page
├── dashboard.php           # User dashboard (after login)
└── README.md               # Project documentation
```

## Usage

### Sign Up
- Navigate to the signup page (`http://localhost/SignUpLoginInSystem/signup.php`).
- Fill in the form and submit.

### Log In
- Navigate to the login page (`http://localhost/SignUpLoginInSystem/login.php`).
- Enter your credentials and log in.

### Dashboard
- After logging in, you will be redirected to the dashboard.

## Error Handling

- **Empty Fields**: Displays "Fill in all the fields" if any input is missing.
- **Invalid Email**: Displays "Invalid email format" for incorrect email inputs.
- **Username Taken**: Displays "Username already taken" if the username is already in use.
- **Incorrect Credentials**: Displays "Incorrect username or password" for invalid login attempts.