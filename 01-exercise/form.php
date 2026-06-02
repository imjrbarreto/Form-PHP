<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form-php</title>
</head>
<body>
  <h1>Form PHP</h1>

  <form action="login.php" method="POST">
    <div>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
    </div>

    <div>
      <label for="email">email:</label>
      <input type="email" name="email" id="email">
    </div>

    <button type="submit">Send</button>

  </form>
  <small>Username: admin ✅</small>
  <small>Username: any other value ❌</small>
</body>
</html>