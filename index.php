<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index_register.css">
    <script src="https://unpkg.com/@tailwindcss/browser@latest"></script>
</head>
<body class="bg-gradient-to-br from-green-400 to-blue-500">
    <div class="container">
        <h2 class="heading">Login</h2>
        <form id="loginForm">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" id="remember" name="remember">
                    Remember me
                </label>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="login-button">Login</button>
            <div class="register-link">
                Don't have an account? <a href="register.php">Register</a>
            </div>

        </form>
    </div>

    <script>
        const loginForm = document.getElementById('loginForm');
        const closeButton = document.getElementById('closeButton'); // Get the close button

        loginForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const remember = document.getElementById('remember').checked;

            if (email == "admin@nast.edu.np" && password == "password")
                window.location.href = 'http://localhost:8000/frontend/Admin/dashboard.php';
            else if (email == "teacher@nast.edu.np" && password == "password")
                window.location.href = 'http://localhost:8000/frontend/Teacher/dashboard.php';
            //console.log('Form data:', { email, password, remember });
            //alert('Login successful! Check console for data.');
        });

        closeButton.addEventListener('click', () => {
             // In a real application, you would close the modal or navigate to a different page.
             alert('Close button clicked!');
        });
    </script>
</body>
</html>
