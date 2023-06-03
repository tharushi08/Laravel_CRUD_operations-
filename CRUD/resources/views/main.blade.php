<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <br></br>
        <a class="nav-link" href="#">Laravel CRUD Operation <span class="sr-only">(current)</span></a>
      </li>
      
      </li>
    </ul>
  </div>
</nav>
<br></br>
<div class="modal fade" class="md" id="examplemodal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="ture">
  <div class="modal-dialog" id="loginModal" class="modal fade" role="document">
    <div class="modal-content">
      <div  class="headmodal" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
          <span aria-hidden="true">&times;</span>
      </div>
      <div class="modal-body">
        .....<div class="container" id="one">
            <form action= ""method="POST">
                @csrf
                <input type="text" name="Name" placeholder="Enter Name">
                <br></br>
                <input type="text" name="Password" placeholder="Enter Password">
                <br></br>
                <input type="text" name="Date" placeholder="Enter Date">
                <br></br>
                <button class="btn btn-danger" data-dismiss="modal">Cancel</button>

                <button class="btn btn-primary" type="submit">Add</button>
            </form>

      </div>
      </div>
    </div>
  </div>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($members as $member)
    <tr>
      <td>{{$member['ID']}}</td>
      <td>{{$member['Name']}}</td>
      <td>{{$member['Password']}}</td>
      <td>{{$member['Date']}}</td>
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
<button data-loading-text="Loading......" class="btn btn-warning" type="Button"
data-toggle="modal" data-target="#examplemodal"
>Add Student</button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>