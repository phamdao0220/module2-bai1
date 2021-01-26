<?php


namespace App\Model;


class StudentModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SElECT * FROM Student';
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function addStudent($student)
    {
        $sql = 'INSERT INTO Student(name, age, address) VALUES (:name,:age,:address)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $student->getName());
        $stmt->bindParam(':age', $student->getAge());
        $stmt->bindParam(':address', $student->getAddress());
        $stmt->execute();
    }

    public function getStudentById($id)
    {
        $sql = 'SELECT * FROM Student WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;


    }
    public function editStudent($newStudent)
    {
        $sql = 'UPDATE Student SET name=:name, age=:age, address=:address WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $newStudent->getName());
        $stmt->bindParam(':age', $newStudent->getAge());
        $stmt->bindParam(':address',$newStudent->getAddress());
        $stmt->bindParam(':id',$newStudent->getId());
        $stmt->execute();
    }

    public function deleteStudent($id)
    {
       $sql='DELETE FROM Student WHERE id=:id';
       $stmt=$this->database->prepare($sql);
       $stmt->bindParam(':id',$id);
       $stmt->execute();
    }
}
