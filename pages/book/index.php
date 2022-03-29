<?php require $_SERVER['DOCUMENT_ROOT']."/reserve/vendor/autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data reserve a car</title>
    <link rel="stylesheet" href="../../theme/css/bootstrap-theme.css">
</head>
<body class = "font-kanit">
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">Data Reserve a Car</div>
                    <div class="card-body">
                        <table class="table">   
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>จองรถ</th>
                                    <th>ชื่อผู้ขอใช้รถ</th>
                                    <th>วันที่ใช้รถ</th>
                                    <th>ถึงวันที่</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    use App\Model\Reserve;

                                    $reserveObj = new Reserve();

                                    $reserves = $reserveObj->getAllReserve();

                                    $n=0;

                                    foreach($reserves as $reserve) {
                                        $n++;
                                        echo "
                                            <tr>
                                                <td>{$n}</td>
                                                <td>{$reserve['t_id']}</td>
                                                <td>{$reserve['staff_name']}</td>
                                                <td>{$reserve['start_date']}</td>
                                                <td>{$reserve['end_date']}</td>
                                                <td>{$reserve['statu']}</td>
                                            </tr>
                                        ";
                                    }

                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>