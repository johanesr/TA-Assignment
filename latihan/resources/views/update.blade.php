<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update</title>
  </head>
  <body>

    <form action="/updateProcess/{{ $users->id }}" method="post">
    {{csrf_field()}}
    <p>Name:</p> <input type="text" name="name" value="{{ $users->name }}" required> <br>
    <p>Email:</p> <input type='text' name="email" value="{{ $users->email }}" required><br>
    <p>Password:</p> <input type='password' name="password" value="{{ $users->password }}" required><br>
    <input type="submit" value="submit">
  </form>
  </body>
</html>
