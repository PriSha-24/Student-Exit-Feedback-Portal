<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Feedback Details</title>
    <link rel="stylesheet" href="styles2.css" />
  </head>

  <body>
    <form action="php1/logout.php" method="POST">
      <div class="logout">
        <input type="submit" value="Log Out" name="logout" />
      </div>
    </form>

    <?php 
      session_start();
      require 'php1/config.php';

      if (isset($_SESSION['login_user'])) {
        $userLoggedIn = $_SESSION['login_user'];

        try {
          $pdo = new PDO('mysql:host=localhost;dbname=feedback', 'root', '');
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
          $query = "SELECT * FROM feedback";
          $result = $pdo->query($query);

          echo "<table border='1' id='students-table'>
                <tr>
                    <th>Year</th>
                    <th>Date</th>
                    <th>Branch</th>
                    <th>Faculty</th>
                    <th>Ques1</th>
                    <th>Ques-2i</th>
                    <th>Ques-2ii</th>
                    <th>Ques-2iii</th>
                    <th>Ques-2iv</th>
                    <th>Ques-2v</th>
                    <th>Ques3</th>
                    <th>Ques4</th>
                    <th>Remarks</th>
                </tr>";

          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['year'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['branch'] . "</td>";
            echo "<td>" . $row['faculty'] . "</td>";
            echo "<td>" . $row['ques1'] . "</td>";
            echo "<td>" . $row['ques2i'] . "</td>";
            echo "<td>" . $row['ques2ii'] . "</td>";
            echo "<td>" . $row['ques2iii'] . "</td>";
            echo "<td>" . $row['ques2iv'] . "</td>";
            echo "<td>" . $row['ques2v'] . "</td>";
            echo "<td>" . $row['ques3'] . "</td>";
            echo "<td>" . $row['ques4'] . "</td>";
            echo "<td>" . $row['remarks'] . "</td>";
            echo "</tr>";
          }

          echo "</table";
        } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
      }
      else {
        //header("Location: index.php");
      }
    ?>
  </body>
</html>
