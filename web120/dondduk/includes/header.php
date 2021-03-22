<?php include 'dondduk-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5c31fb8743.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/form.css">
    <title><?=$title?></title>
</head>
<body>
    <header>
        <h2 class="pageID"><?=$PageID?></h2>        
        <div class="top-container">
            <div class="top-logo">
                <a href="index.php">
                Dondduk
                </a>
            </div>
            <div class="sub-logo">The barbeque grill</div>
            <div class="top-nav">
                <div class="nav">
                <?=makeLinks($nav2, $mapLink)?>
                    <!-- <a href="order.html" class="delivery">online order</a>
                    <a href="about.html">about Dondduk</a>
                    <a href="menu.html">menu</a>
                    <a href="contact.html">contact</a>
                    <a href="https://map.naver.com/v5/entry/place/1539489212?c=14136004.1448371,4494401.7337420,15,0,0,0,dh&placePath=%2Fbooking%3Fentry=plt" target="_blank" class="reservation">reservation</a> -->
                </div>
            </div>
        </div>
    </header>
    <script>
        const userAgent = navigator.userAgent;
        const isMobileAgent = userAgent.search(/iPhone/) > -1 || userAgent.search(/Android/) > -1;
        const deliveryElement = document.getElementById('delivery');
        const onlineOrderElement = document.getElementById('online order');
        if (isMobileAgent) {
            onlineOrderElement.classList.add('hide');
            deliveryElement.classList.add("show");
        } else {
            onlineOrderElement.classList.add('show');
            deliveryElement.classList.add("hide");
        }
    </script>