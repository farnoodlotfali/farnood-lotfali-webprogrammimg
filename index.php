<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" >
    <title>Document</title>
</head>
<body >
    <table class="table">
          <?php for($i=1; $i<=9; $i++){ ?>
            <tr >
              <?php for($j=1; $j<=9; $j++){ ?>
                <td  ><?= $j ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
        </table>
</body>
</html>