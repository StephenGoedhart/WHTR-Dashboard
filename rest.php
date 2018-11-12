<?php
error_reporting(-1);

if(!isset($_SERVER['PATH_INFO'])){
  echo "Welcome to Homestation REST";
  exit();
}

$host = "127.0.0.1"; //MYSQL Runs on the same server.
$port = "3306"; //Default MSQL port.
$db = "homestation"; //Database name.
$uname = "root"; //Username.
$pword = ""; //Password.

$conn = new mysqli($host, $uname, $pword, $db, $port); //Open connection.

if (mysqli_connect_errno()) { //Check if connection failed.
    printf("Connect failed: %s\n", mysqli_connect_error()); //Log the error.
    exit(); //Stop script execution.
}

$method = htmlspecialchars($_SERVER["REQUEST_METHOD"]); //Get Request method type [GET/POST/PUT/DELETE] from server.
$args = explode("/", $_SERVER['PATH_INFO']); //Create array from string seperated by '/'.

switch($method){ //Alternate behaviour depending on request method.
  case "POST": //HTTP POST request.
      switch (htmlspecialchars($args[1])) { //first param
        case "weather":

          $temperature = mysqli_real_escape_string($conn, $_POST['temperature']); //Remove dangerous characters from posted temperature data
          $humidity = mysqli_real_escape_string($conn, $_POST['humidity']); //Remove dangerous characters from posted humidty data
          $rpm = mysqli_real_escape_string($conn, $_POST['rpm']); //Remove dangerous characters from posted rpm data
          $rain = mysqli_real_escape_string($conn, $_POST['rain']); //Remove dangerous characters from posted winddirection data
          $timestamp = date('Y-m-d G:i:s');

          $sql = "INSERT INTO weather(temperature, humidity, rpm, rain, timestamp) VALUES('$temperature', '$humidity', '$rpm', '$rain', '$timestamp')";
          if($conn->query($sql)) echo "201 created";
          else echo "Error: " . $sql . "<br>" . $conn->error;

          // code...
          break;
        default:
          // code...
          break;
      }
      break;
  default: //HTTP GET Request.
      switch (htmlspecialchars($args[1])) { //first param
        case "weather":
          $sql = "SELECT * FROM weather";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) { // if their are rows, output data of each row

            $i = 0; //counter
            $data = array(); //resultset array

            while($row = $result->fetch_assoc()) { //while there is another row
              $data[$i] =  array('windspeed' =>  $row["rpm"], 'humidity' =>  $row["humidity"], 'temperature' =>  $row["temperature"], 'rain' =>  $row["rain"], 'timestamp' =>  $row["timestamp"]); //complete row
              $i++; //increment counter
            }

            echo json_encode($data); //display result
          } else {
            echo "0 results";
          }
        break;
        default:
          break;
      }
    break;
  }

$conn->close(); //Close connection
?>
