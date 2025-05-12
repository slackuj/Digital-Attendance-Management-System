<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index_register.css">
    <script src="https://unpkg.com/@tailwindcss/browser@latest"></script>
</head>
<body class="bg-gradient-to-br from-green-400 to-blue-500">
    <div class="container">
        <h2 class="heading">Register</h2>
        <form id="registerForm">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Agree to terms & conditions</label>
            </div>
            <button type="submit" class="register-button">Register</button>

        </form>
    </div>

    <script>
        const registerForm = document.getElementById('registerForm');
       // const closeButton = document.getElementById('closeButton'); // Get the close button

        registerForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const terms = document.getElementById('terms').checked;

            console.log('Form data:', { username, email, password, terms });
            alert('Registration successful! Check console for data.');
        });

       // closeButton.addEventListener('click', () => {
             // In a real application, you would close the modal or navigate to a different page.
            // alert('Close button clicked!');
        });
    </script>
</body>
</html>
