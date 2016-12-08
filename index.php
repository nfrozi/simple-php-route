<html>
<head>
    <title>Coba</title>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    include_once 'nav.php';
    
    if ( ! empty($_GET['pg'])) {
        include_once 'pages/'.$_GET['pg'].'.php';
    }
    else {
        include_once 'pages/home.php';
    }
    
    include_once 'footer.php';
    ?>
</body>
</html>