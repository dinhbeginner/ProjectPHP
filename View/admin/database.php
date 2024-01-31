<?php
include 'config.php';

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $pdo;
    private $error;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = "Connection failed: " . $e->getMessage();
            return false;
        }
    }

    // select or read data
// In your Database class
public function select($query)
{
    $stmt = $this->pdo->query($query);
    
    // Check if the query was successful
    if ($stmt === false) {
        return false;
    }

    return $stmt;
}


    // insert data with prepared statement
    public function insert($query, $values)
    {
        try {
            $stmt = $this->pdo->prepare($query);
            $result = $stmt->execute($values);
    
            return $result;
        } catch (PDOException $e) {
            // Handle the exception (log it, show an error message, etc.)
            return false;
        }
    }
    
    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }

    // update data
    public function update($query, $values)
    {
        $stmt = $this->pdo->prepare($query);
        $result = $stmt->execute($values);

        return $result !== false;
    }

    // delete data
    public function delete($query, $values)
    {
        $stmt = $this->pdo->prepare($query);
        $result = $stmt->execute($values);

        return $result !== false;
    }
    public function getPDO()
{
    return $this->pdo;
}
}
class connect{
    //thuộc tính
    var $db=null;
    //hàm tạo được gọi khi chúng ta tạo 1 đối tượng
    function __construct()//hàm tạo không có đối số
    {
        $dsn='mysql:host=localhost;dbname=websize_porto';
        $user='root';
        $pass='';//nếu xài xamp, wamp $pass=''; //nếu xài mamp $pass='root';
        //tạo đối tượng kết nối với PDO
        try {
            $this->db=new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
            // echo "Kết nối thành công";
        } catch (\Throwable $th) {
            //throw $th;
            echo "Kết nối không thành công";
            echo $th;
        }
    }
    //phương thức
    //phương thức nào thực thi câu lệnh select? query
    //phương thức trả về nhiều dòng
    function getList($select)
    {
        $result = $this->db->query($select);//trả về nhiều dòng là 1 table
        return $result;
    }
    //phương thức trả về 1 dòng
    function getInstance($select)
    {
        $result=$this->db->query($select);//trả về 1 dòng
        //do trả về chỉ 1 dòng nên fetch luôn để lấy dữ liệu
        $result=$result->fetch();//$result là array=(thuộc tính 1 : giá trị 1, thuộc tính 2: giá trị 2)
        return $result;
    }
    //phương thức thực thi câu lệnh insert, update, delete thì ai thực thi? exec
    function exec($query)
    {
        $result=$this->db->exec($query);
        return $result;
    }
    //phương thức prepare
    function execp($query)
    {
        $statement=$this->db->prepare($query);
        return $statement;
    }

  

}
