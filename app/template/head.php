
<!DOCTYPE html>
<html class="h-full bg-gray-100">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo APPURI.'/dist/output.css' ?>">
    <link rel="stylesheet" href="<?php echo APPURI.'/assets/css/styles.css' ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asul&family=Space+Mono&display=swap" rel="stylesheet">

    <!-- Flowbite date-picker only load if needed as messes up other css-->
    <?php if(isset($uri[2]) && in_array($uri[2], ["view", "add", "edit", "delete", "confirm"])){ ?>
    
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
        <script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script>

    <?php } ?>
    
</head>