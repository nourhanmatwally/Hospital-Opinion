<?php

if ($_POST) {
    $opinion1 = $_POST['opinion1'];
    $opinion2 = $_POST['opinion2'];
    $opinion3 = $_POST['opinion3'];
    $opinion4 = $_POST['opinion4'];
    $opinion5 = $_POST['opinion5'];

    // if(isset($opinions))[$opinion1,$opinion2,$opinion3,$opinion4,$opinion5];
    // $opinions = ($opinion1+$opinion2+$opinion3+$opinion4+$opinion5);{
    //     $msg ="$opinions";
    // }
    // if ($opinion1 = 0){
    //     $msg ="$opinions";
    // }elseif ($opinion2 = 3){
    //     $msg ="$opinions";
    // }elseif ($opinion3 = 5){
    //     $msg ="$opinions";
    // }elseif ($opinion4 = 10){
    //     $msg ="$opinions";
    // }elseif ($opinion5 = 10){
    //     $msg ="$opinions";
    // }


    function clc($opinion)
    {
        if ($opinion == 'bad') {
            return 0;
        } elseif ($opinion == 'good') {
            return 3;
        } elseif ($opinion == 'very good') {
            return 5;
        } else {
            return 10;
        }
    }

    $opinion1 = clc($opinion1);
    $opinion2 = clc($opinion2);
    $opinion3 = clc($opinion3);
    $opinion4 = clc($opinion4);
    $opinion5 = clc($opinion5);

    $opinion = $opinion1 + $opinion2 + $opinion3 + $opinion4 + $opinion5;
    $msg = $opinion;

    if ($opinion <= 25) {
        $badopinion = 'we well call you on' . $_POST['phone_number'];
    } else {
        $goodopinion =  'Thanks For Your Opinion';
    }
    // print_r($opinion);

}


?>
<!doctype html>
<html lang="en">

<head>
    <title>opinions_answer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <br>
    <form action="" method="POST" style="text-align: center;">
        <div class="container">
            <h1 class="bg-primary text-white" style="text-align: center;">Your Answer Is :</h1>
            <table class="table table-hover">
                <thead>
                    <tr class="table-primary">
                        <th>Question :</th>
                        <th>Answer :</th>
                    </tr>
                </thead>
                <tbody class="table-info">
                    <tr>
                        <td>1. Are you satisfied with the level of cleanliness?</td>
                        <td>Bad</td>
                    </tr>
                    <td>2. Are you satisfied with the service prices?</td>
                    <td>Good</td>
                    <tr>
                        <td>3. Are you satisfied with the nursing service?</td>
                        <td>Very Good</td>
                    </tr>
                    <tr>
                        <td>4. Are you satisfied with the level of doctors?</td>
                        <td>Excellent</td>
                    </tr>
                    <tr>
                        <td>5. Are you satisfied with the calm in the hospital?</td>
                        <td>Good</td>
                    </tr>
                    <tr>
                        <td>Opinion_Answer_Is</td>
                        <td name="opinions"><?php echo (isset($msg) ? $msg : '') ?></td>
                    </tr>
                </tbody>
            </table>
            <h3 class="bg-primary text-white" style="text-align: center;">

                <?php
                 if ($opinion <= 25) {
                    echo 'we well call you on' . $_POST['phone_number'];
                } else {
                    echo  'thanks';
                } 
              
                ?>

            </h3>

        </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>