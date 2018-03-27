@extends('adminlte::page')

@section('title', 'profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
<div class="box box-primary">
<div class="box-body box-profile">
  <img class="profile-user-img img-responsive img-circle" src="{{ asset('img/profile-placeholder.jpg') }}" alt="User profile picture">

  <h3 class="profile-username text-center">
  <?php

  $servername = "homestead";
  $username = "homestead";
  $password = "secret";
  $dbname = "homestead";

// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT name FROM users";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
  $conn->close();
  ?> 
  </h3>

  <p class="text-muted text-center">Software Engineer</p>

  <ul class="list-group list-group-unbordered">
    <li class="list-group-item">
      <b>Email: </b> <a class="pull-right">  <?php

$servername = "homestead";
$username = "homestead";
$password = "secret";
$dbname = "homestead";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($rowe = $result->fetch_assoc()) {
      echo "" . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> </a>
    </li>
  </ul>

  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
</div>
<!-- /.box-body -->
</div>
@stop