<?php

/**
 *  Gets a new mysql connection
 */
function getConnection() {
  $connection = new mysqli('localhost:3306', 'root', 'root1234', 'php_web2');
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}

/**
 * Inserts a new student to the database
 *
 * @student An associative array with the student information
 */
function saveStudent($student) {
  $conn = getConnection();
  $sql = "INSERT INTO students( `full_name`, `email`, `document`)
          VALUES ('{$student['full_name']}', '{$student['email']}', '')";
  $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return true;
}


/**
 * Get all students from the database
 *
 */
function getStudents(){
  $conn = getConnection();
  $sql = "SELECT * FROM students";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return [];
  }
  $conn->close();
  return $result;
}

/**
 * Get one specific student from the database
 *
 * @id Id of the student
 */
function authenticate($username, $password){
  $conn = getConnection();
  $sql = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return $result->fetch_array();
}

/**
 * Deletes an student from the database
 */
function deleteStudent($id){
  $conn = getConnection();
  $sql = "DELETE FROM students WHERE id = $id";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return true;
}


/**
 * Add Client to the data base.
 * 
 */
function addCliente($Cliente){
  $name =  $Cliente['nombre'];
  $lastname = $Cliente['apellido'];
  $username = $Cliente['usuario'];
  $password = $Cliente['password'];
  
  $conn = getConnection();
  $sql = "INSERT INTO users( `username`, `password`, `role`, `name`, `lastname`)
          VALUES ('$username', '$password', 'Cliente', '$name', '$lastname')";
  $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return true;
}