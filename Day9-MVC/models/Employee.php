<?php
require_once 'configs/database.php';

class Employee
{
    public $id;
    public $name;
    public $description;
    public $salary;
    public $gender;
    public $birthday;
    public $create_at;

    public function connectDb()
    {
        $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Khong the ket noi<br>" . mysqli_connect_error());
        }
        return $connection;
    }

    public function index()
    {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM employees";
        $results = mysqli_query($connection, $querySelect);
        $employees = [];
        if (mysqli_num_rows($results) > 0) {
            $employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);
        return $employees;
    }

    public function insert($param = [])
    {

        $connection = $this->connectDb();
        $queryInsert = "INSERT INTO employees(`name`,`description`,`salary`,`gender`,`birthday`) VALUES ('{$param['name']}','{$param['description']}','{$param['salary']}','{$param['gender']}','{$param['birthday']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);
        return $isInsert;
    }

    public function getEmployeeById($id = null)
    {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM employees WHERE id = $id";
        $result = mysqli_query($connection, $querySelect);
        $employee = [];
        if (mysqli_num_rows($result) > 0) {
            $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $employee = $employees[0];
        }
        $this->closeDb($connection);
        return $employee;
    }

    public function view($id = null)
    {
        $connection = $this->connectDb();
        $queryView = "SELECT * FROM employees WHERE `id` = $id";
        $result = mysqli_query($connection, $queryView);
        $employees = [];
        if (mysqli_num_rows($result) > 0) {
            $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);
        return $employees;
    }

    public function update($employee = [])
    {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE employees 
        SET `name` = '{$employee['name']}',
            `description` = '{$employee['description']}',
            `salary` = '{$employee['salary']}',
            `gender` = '{$employee['gender']}',
            `birthday` = '{$employee['birthday']}' 
        WHERE `id` = {$employee['id']}";
        $isUpdate = mysqli_query($connection,$queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }

    public function delete($id = null)
    {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM employees WHERE id = $id";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

    public function closeDb($connection = null)
    {
        mysqli_close($connection);
    }
}