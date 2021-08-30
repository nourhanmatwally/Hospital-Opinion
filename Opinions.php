<?php


?>
<!doctype html>
<html lang="en">

<head>
    <title>Question</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <form action="Opinions_answer.php" method="POST" style="text-align: center;">
    <input type="hidden" value="<?php echo $_POST['phone_number']; ?>" name="phone_number">
        <div class="container">
            <h1 class="bg-primary text-white" style="text-align: center;">Question ?</h1>
            <table class="table table-hover">
                <thead>
                    <tr class="table-primary">
                        <th>Question :</th>
                        <th>Bad :</th>
                        <th>Good :</th>
                        <th>Very Good :</th>
                        <th>Excellent :</th>
                    </tr>
                </thead>
                <tbody class="table-info">
                    <tr>
                        <td>1. Are you satisfied with the level of cleanliness?</td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion1" value="bad">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion1" value="good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion1" value="very good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion1" value="Excellent">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2. Are you satisfied with the service prices?</td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion2" value="bad">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion2" value="good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion2" value="very good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion2" value="Excellent">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3. Are you satisfied with the nursing service?</td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion3" value="bad">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion3" value="good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion3" value="very good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion3" value="Excellent">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4. Are you satisfied with the level of doctors?</td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion4" value="bad">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion4" value="good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion4" value="very good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion4" value="Excellent">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5. Are you satisfied with the calm in the hospital?</td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion5" value="bad">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion5" value="good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion5" value="very good">
                            </div>
                        </td>
                        <td>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="opinion5" value="Excellent">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <input type="submit" class="btn btn-info" value="Submit Button">
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>




<!-- <h3 class="bg-primary text-white" style="text-align: center;">//Thank You For Your Opinion <?php // echo $_POST['phone_number'];?></h3> -->
