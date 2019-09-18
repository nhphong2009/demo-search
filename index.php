<?php
include './ketnoi.php';
include './datademo.php';
include './functiondemo.php';

$service = new functiondemo();

$tuKhoa = "";
if(isset($_REQUEST['btnTimKiem']))
{
    $tuKhoa = $_POST['txtTuKhoa'];
}
$ds = $service->timkiemname($tuKhoa);
?>
<html>
<head>
    <title>Danh sách demo</title>
</head>
<body>
<div style="text-align: center;">
    <h1>Danh sách demo</h1>
</div>
<form method="post">
    <fieldset>
        <legend>Từ khoá</legend>
        <table>
            <tr>
                <td>
                    Từ khoá
                </td>
                <td>
                    <input type="text" name="txtTuKhoa" value="<?php echo $tuKhoa; ?>"/>
                </td>
                <td>
                    <input type="submit" name="btnTimKiem" value="Tìm kiếm"/>
                </td>
            </tr>
        </table>
    </fieldset>
    </div>
    <table  style="width: 100%; border-collapse: collapse" border="1">
        <tr style="background-color: #f9d77a;">
            <th>
                ID
            </th>
            <th>
                Name
            </th>
        </tr>

        <?php
        foreach ($ds as $objdemo) {
            echo "<tr>";
            echo "<td style='text-align: center'>" . $objdemo->ID . "</td>";
            echo "<td style='text-align: center'>" . $objdemo->name . "</td>";
            echo "</tr>";
        }?>
    </table>
</body>
</html>
