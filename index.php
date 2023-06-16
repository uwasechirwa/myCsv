<!DOCTYPE html>
<html lang="en">

<head>
  <title>students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "students";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>

  <div class="container mt-3">
    <h2>Students</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>stdid</th>
          <th>First name</th>
          <th>Second name</th>
          <th>Gender</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo " <tr>" . "<td>" . $row["stdid"] . "</td>" . "<td>" . $row["fname"] . "</td>" . "<td>" . $row["sname"] . "</td>" . "<td>" . $row["gender"] . "</td>" . "<td>" . $row["email"] . "</td>" . "</tr>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>