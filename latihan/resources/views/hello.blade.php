<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
</head>
<body>
  <form method="POST" action="/register">
    {{ csrf_field() }}
    <p>Name:</p><input type="text" name="name" placeholder="name" required><br />
    <p>Email:</p><input type="email" name="email" placeholder="email" required><br />
    <p>Password:</p><input type="password" name="password" placeholder="password" required><br /><br />
    <button type="submit">Submit</button>
  </form>
</body>
</html>
