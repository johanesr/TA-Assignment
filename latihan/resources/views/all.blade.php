<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Exercise</title>
  </head>
  <body>
    <table border="3">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td><a href="/user/{{ $user->id }}">Detail</a></td>
        <td><a href="/delete/{{ $user->id }}">Delete</a></td>
        <td><a href="/update/{{ $user->id }}">Update</a></td>
      </tr>
      @endforeach
    </table>
    <button type="button"><a href="/hello">Register</a></button>
  </body>
</html>
