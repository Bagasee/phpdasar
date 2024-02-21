<?php
$secret = ["bagas","shinta","malvi","puja","della","rara","blek","roby","harsya","dita"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: grey;
            text-align: center;
            line-height: 50px;
            margin:3px;
            float: left;
        }
        .clear {clear:both;}
    </style>
</head>
<body>

<?php for ( $i= 0; $i < count($secret) ; $i++){  ?>
    <div class="kotak"><?php echo $secret[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($secret as $member) { ?>
    <div class= "kotak"><?php echo $member; ?></div>
<?php }?>

<div class="clear"></div>


<?php foreach ($secret as $member) : ?>
    <div class ="kotak"><?= $member ; ?> </div>
<?php endforeach ; ?>

</body>
</html>