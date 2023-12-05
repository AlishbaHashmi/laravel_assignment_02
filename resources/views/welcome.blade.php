<!doctype html>
<html lang="en">

<head>
  <title>To Do App</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="container mt-5">
        <form action="{{url('/')}}/form" class="form-group" method="POST">
            @csrf
            <h1>Registration Form</h1>
            
            <label for="name">Name</label>
            <input class="form-control form-control-lg" name="name" type="text"  aria-label=".form-control-lg example" value="{{old('name')}}">
            <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </span>
            <br>
            <label for="email">Email</label>
            <input class="form-control" name="email" type="email"  aria-label="default input example" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
            </span>
            <br>
            <label for="password">Password</label>
            <input class="form-control form-control-sm" name="password" type="password"   value="{{old('password')}}">
            <span class="text-danger">
                @error('password')
                {{$message}}
                @enderror
            </span>
            <br>
            <input type="submit" class="btn btn-success" value="Register">
        </form>
    </div>
<hr>
    <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user_Data as $value)
        
           
            <tr>
              <td >{{$value->id}}</td>
              <td >{{$value->name}}</td>
              <td >{{$value->email}}</td>
              <td >{{$value->password}}</td>
              <td ><a class="btn btn-danger" href="{{url('/')}}/form/{{$value->id}}">X</a></td>
            
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>