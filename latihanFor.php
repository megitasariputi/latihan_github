<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <?php
            for ($i=1900; $i <= 2021; $i++){ ?>

                <option value="<?= $i?>" 
                <?php if($i==1997){echo'selected';} ?>>

                    <?= $i?>
                    
                </option>

            <?php } ?>
    </select>
</body>
</html>