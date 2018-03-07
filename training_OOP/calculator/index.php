<?php require_once 'Calculator.class.php'; ?>
<?php require_once 'calculator_action.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
  <table>
 <tr>
   <td>First Number: </td>
   <td><input type="number" name ="firstNumber"/></td>
 </tr>

 <tr>
   <td>Operator: </td>
   <td>
    <select name="operator">
        <option value="+">Add</option>
        <option value="-">Sub</option>
    </select>
   </td>
 </tr>

 <tr>
   <td>Second Number : </td>
   <td><input type="number" name ="secondNumber"/></td>
 </tr>

 <tr>
   <td><input type="submit" name="calculation" value="Calculate" /></td>
 </tr>

  </table>
</form>

</body>
</html>
