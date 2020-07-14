<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-md-4 mx-auto pt-5">
              <h2>Tambah data</h1><br>
              <form method="POST" action="/user/save">
              <div class="form-group">
                    <label for="id">ID User</label>
                    <input type="text" name="user_id" class="form-control"  placeholder ="ID User"required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="user_nama" class="form-control" placeholder ="Nama">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name ="user_email" class="form-control" aria-describedby="emailHelp"placeholder ="Email">
                </div>
<!--                <div class="form-group">
                    <label >Password</label>
                    <input type="Password" name="nama" placeholder ="Nama"></br>
                </div>
                <div class="form-group">
                    <label >Konfirmasi Password</label>
                    <input type="Password" name="nama" placeholder ="Nama"></br>
                </div>
                -->
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
          </div>
      </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>