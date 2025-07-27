<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @csrf
    <!-- Add the CSS here or link to external file -->
</head>
<body>

<div class="auth-container">
    <h2>Login</h2>
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <a href="/register">Don't have an account? Register</a>
</div>

</body>
</html>

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(to right, #2c5364, #203a43, #0f2027);
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.auth-container {
    background-color: rgba(255, 255, 255, 0.1);
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0,0,0,0.5);
    width: 100%;
    max-width: 400px;
    backdrop-filter: blur(10px);
}

.auth-container h2 {
    text-align: center;
    margin-bottom: 1.5rem;
    font-weight: 600;
    color: #ffffff;
}

.auth-container form {
    display: flex;
    flex-direction: column;
}

.auth-container input {
    padding: 12px;
    margin-bottom: 1rem;
    border: none;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
}

.auth-container input::placeholder {
    color: #ddd;
}

.auth-container button {
    padding: 12px;
    background-color: #00c9ff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    transition: background 0.3s;
}

.auth-container button:hover {
    background-color: #00a6d6;
}

.auth-container a {
    color: #ccc;
    font-size: 0.9rem;
    text-align: center;
    display: block;
    margin-top: 1rem;
    text-decoration: none;
}

.auth-container a:hover {
    text-decoration: underline;
}
</style>


