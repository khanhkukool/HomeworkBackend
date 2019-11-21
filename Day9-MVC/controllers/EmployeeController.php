<?php
require_once 'models/Employee.php';
class EmployeeController{
    // Liet ke danh sach
    public function index(){
        $employee = new Employee();
        $employees = $employee->index();
        require_once 'views/employees/index.php';
    }
    public function create(){
        $error = '';
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $salary = $_POST['salary'];
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            if(empty($name)){
                $error = "Name khong duoc de trong";
            }
            else{
                $employee = new Employee();
                $employeeArr = [
                    'name' => $name,
                    'description' => $description,
                    'salary' => $salary,
                    'gender' => $gender,
                    'birthday' => $birthday
                ];
                $isInsert = $employee->insert($employeeArr);
                if($isInsert){
                    $_SESSION['success'] = "Them moi thanh cong";
                }
                else{
                    $_SESSION['error'] = "Them moi that bai";
                }
                header("Location: index.php?controller=employee&action=index");
                exit();
            }
        }
        require_once 'views/employees/create.php';
    }

    public function view(){
        $id = $_GET['id'];
        $employee = new Employee();
        $employees = $employee->view($id);
        require_once 'views/employees/view.php';
    }

    public function update(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Tham so khong hop le";
            header("Location: index.php?controller=employee&action=index");
            return;
        }
        if(!is_numeric($_GET['id'])){
            $_SESSION['error']="Id phai la so";
            header("Location: index.php?controller=employee&action=index");
            return;
        }
        $id = $_GET['id'];
        $employeeModel = new Employee();
        $employee = $employeeModel->getEmployeeById($id);

        $error = '';
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $salary = $_POST['salary'];
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            if(empty($name)){
                $error = "Name khong duoc de trong";
            }
            else{
                $employeeArr = [
                    'id' =>$id,
                    'name' =>$name,
                    'description' =>$description,
                    'salary' =>$salary,
                    'gender' =>$gender,
                    'birthday' =>$birthday,
                ];
                $isUpdate = $employeeModel->update($employeeArr);
                if($isUpdate){
                    $_SESSION['success'] = "Update ban ghi #$id thanh cong";
                }
                else{
                    $_SESSION['error'] = "Update ban ghi #$id that bai";
                }
                header("Location: index.php?controller=employee&action=index");
                exit();
            }
        }
        require_once 'views/employees/update.php';
    }
    public function delete(){
        $id = $_GET['id'];
        $employee = new Employee();
        $isDelete = $employee->delete($id);
        if($isDelete){
            $_SESSION['success'] = "Xoa ban ghi #$id thanh cong";
        }
        else{
            $_SESSION['error'] = "Xoa ban ghi #$id that bai";
        }
        header("Location: index.php?controller=employee&action=index");
        exit();
    }
}