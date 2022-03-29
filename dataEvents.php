<?php require $_SERVER['DOCUMENT_ROOT']."/reserve/vendor/autoload.php"; ?>

<?php
    use App\Model\Reserve;

    $reserveObj = new Reserve();

    $reserves = $reserveObj->getAllReserve();

    $n=0;

    foreach($reserves as $reserve) {
        if ($reserve['statu'] == 'reject') {
            $color = '#FF9900';
            //FF0000
        }
        if ($reserve['statu'] == '') {
            $color = '#FFFFFF';
        }
        if ($reserve['statu'] == 'accept') {
            $color = '#e3bc08';
        }
        $json_data[] = [
            'id' => $reserve['id'],
            'title' =>
                $reserve['t_id'] . ',' . $reserve['staff_name'] ,
            'start' => $reserve['start_date'],
            'end' => $reserve['end_date'],
            'url' => 'showEventsData.php?id=' . $reserve['id'],
             'color' => $color,
        ];
    }
    $json = json_encode($json_data);
    echo $json;

?>