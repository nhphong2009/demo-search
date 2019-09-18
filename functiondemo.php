<?php
class functiondemo
{
    private $ketNoi;

    function __construct()
    {
        $this->ketNoi = ketnoi::getConnection();
    }

    public function timkiemname($tuKhoa)
    {
        $lstdemo = Array();

        $SQL = "Select * from test where 1 = 1";

        if(strlen($tuKhoa) > 0)
        {
            $SQL .= " AND (name like '%" . $tuKhoa . "%')";
        }
        $result = mysqli_query($this->ketNoi, $SQL);

        while($row = mysqli_fetch_array($result))
        {
            $objdemo = new datademo();

            $objdemo->ID = $row['ID'];

            $objdemo->name = $row['name'];

            array_push($lstdemo, $objdemo);
        }

        $this->ketNoi->close();

        return $lstdemo;
    }
}
?>