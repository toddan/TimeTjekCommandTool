<?php
class Repository {
    private $db;

    public function __construct()
    {
        $type = Configurations::DbConfig('dbtype');
        $host = Configurations::DbConfig('host');
        $dbname = Configurations::DbConfig('dbname');
        $user = Configurations::DbConfig('user');
        $password = Configurations::DbConfig('pass');

        try {
            $this->db = new PDO(
                "$type:host=$host;dbname=$dbname",
                $user,
                $password,
                array(
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => true,
                    PDO::ERRMODE_EXCEPTION => true
                )
            );
        } catch(PDOException $e) {
            echo "Failed to get database handle: " . $e->getMessage();
            exit;
        }
    }

    private function prepareAndExecute($sql,$data)
    {
        try {
            $this->db->prepare($sql)->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    private function insert($table, $data)
    {
        ksort($data);
        $field_Names = implode(', ',array_keys($data));
        $field_Values = ':'.implode(', :',array_keys($data));
        $sql = "INSERT INTO $table ($field_Names) VALUES($field_Values)";
        $this->prepareAndExecute($sql,$data);
    }

    public function InsertAccount($account)
    {
        $this->insert('account',$account);
    }

    public function InsertCodelistDays($codelistdays)
    {
        $this->insert('codelist_days',$codelistdays);
    }

    public function InsertCodelistEmployeeType($codelistemployeetype)
    {
        $this->insert('codelist_employee_type',$codelistemployeetype);
    }

    public function InsertCodelistSalarytype($codelistsalarytype)
    {
        $this->insert('codelist_salary_type', $codelistsalarytype);
    }

    public function InsertCodelistTimeregStatus($codelisttimeregstatus)
    {
        $this->insert('codelist_timereg_status',$codelisttimeregstatus);
    }

}