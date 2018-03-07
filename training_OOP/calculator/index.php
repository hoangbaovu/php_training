<?php require_once 'Calculator.class.php'; ?>
<?php require_once 'calculator_action.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="wrap mx-auto col-md-4">
                <form method="POST">
                    <div class="form-group">
                        <label>First Number</label>
                        <input type="number" name="firstNumber" value="<?php
                            if (isset($_POST['calculation'])) {
                                echo $caculator->getFirstNumber();
                            }
                        ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Operator</label>
                        <select class="form-control" name="operator">
                            <option value="+">Addition</option>
                            <option value="-">Subtraction</option>
                            <option value="*">Multiplication</option>
                            <option value="/">Division</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Second Number</label>
                        <input type="number" name="secondNumber" value="<?php
                            if (isset($_POST['calculation'])) {
                                echo $caculator->getFirstNumber();
                            }
                        ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Result</label>
                        <input type="text" value="<?php
                            if (isset($_POST['calculation'])) {
                                echo $caculator->getResult();
                            }
                        ?>
                        " class="form-control" readonly>
                    </div>
                    <button type="submit" name="calculation" class="btn btn-primary">Calculate</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
