<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Book</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      font-family: sans-serif;
    }

  
    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
    }

    input[type="submit"] {
      padding: 8px 16px;
    }
  </style>
</head>
<body>
  <h1>Library Management System</h1>
   <form action="{{ route('store.book') }}" method="POST">
      @csrf
      @include('partials.form')
  </form>
</body>
</html>
