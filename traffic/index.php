<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Traffic Violation Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background-image: linear-gradient(to bottom, #7F7FD5, #86A8E7, #91EAE4);
      background-size: cover;
    }
    .upload-form {
      background-color: #f5f5f5;
      border-radius: 10px;
      padding: 20px;
      margin-top: 50px;
    }
    .btn {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>

<!-- your PHP code goes here -->

<div class="container">
  <div class="upload-form">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <input type="text" class="form-control" name="vehiclenum" placeholder="Vehicle Number">
      </div>
      <div class="mb-3">
  <select class="form-select" aria-label="Default select example" name="violationtype">
    <option value="Speed">Speed</option>
    <option value="No helmet">No helmet</option>
    <option value="Running a red light">Running a red light</option>
    <option value="Distracted driving">Distracted driving</option>
    <option value="Driving under influence">Driving under influence</option>
    <option value="Illegal parking">Illegal parking</option>
  </select>
</div>

      <div class="mb-3">
        <input type="date" name="date">
      </div>
      <div class="mb-3">
        <input type="file" class="form-control" name="file">
      </div>
      <center>
        <button type="submit" name="submit" class="btn">Submit</button>
      </center>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
