<!DOCTYPE = html>
<html lang = "en">
  <head>
      <meta charset = "utf-8">
      <title>St. Martin's University</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
      <div class = "container mt-5">
        <form action = "createpdf.php" method = "POST">
          <img src = "logo.jpeg" alt = "saints" width = "25%" height = "90"></br></br>
          <div class = "row mb-2">
              <div class = "col-md-3">
                <input type = "text" name = "fullname" placeholder = "Name" class = "form-control" required>
              </div>
              <div class = "col-md-3">
                <input type = "text" name = "studentid" placeholder = "Student ID" class = "form-control" required>
              </div>
          </div>
          <div class = "row mb-2">
                <div class = "col-md-3">
                <input type = "text" name = "major" placeholder = "Major" class = "form-control" required>
                </div>
                <div class = "col-md-3">
                <input type = "text" name = "grade" placeholder = "Grade" class = "form-control" required>
                </div>
          </div>
          <button type = "submit" class = "btn btn-success btn-small btn-block">PDF</button>
        </form>
      </div>
  </body>
</html>
