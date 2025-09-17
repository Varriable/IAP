# IAP Assignment 172652 - Abdilatif Ramadhan

A simple PHP web application for user signup, login, and user management.

## How to Use

1. **Setup**: Edit `conf.php` to add your database credentials (host, user, password, name) and email settings (SMTP host, user, password, port).
2. **Run the App**: Start a PHP server (e.g., `php -S localhost:8000`) and open in browser.
3. **Workflow**:
   - Go to `signup.php` to register a new account.
   - You'll receive a welcome email after signup.
   - Go to `signin.php` to log in.
   - Visit `users.php` to view all registered users.
   - Click "Logout" to end your session.

## Features

- Secure signup with email validation and password hashing.
- Login with session management.
- Dynamic navbar (shows login status).
- Email notifications using PHPMailer.
- Responsive design with Bootstrap.

## Technologies

- PHP, MySQL, Bootstrap, PHPMailer.

## Notes
- For Gmail SMTP, use an app password.

