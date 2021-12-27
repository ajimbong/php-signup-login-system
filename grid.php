<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $name = '';
        if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
        }else{
            header('location: index.html');
        }
    ?>
    <div class="nav">
        <div>Howdy <?php echo $name;?></div>
        <form action="services/logout.php">
        <button class="log-out">Log Out</button>
        </form>
    </div>
    <div class="container">
        <div class="bg1 one">
            <h2>16 <span>| 24</span></h2>
            <p> Goals completed</p>
        </div>
        <div class="bg1 two">
            <h2><i class="fa fa-bed"></i>
            </h2>

            <p>Sleep Keep</p>
        </div>
        <div class="bg2 three">
            <h2>16 <span>| 24</span></h2>
            <p> Goals completed</p>
        </div>
        <div class="bg1 four">
            <h2><i class="fa fa-bed"></i>
            </h2>

            <p>Sleep Keep</p>
        </div>
        <div class="bg2 five">
            <h2>16 <span>| 24</span></h2>
            <p> Goals completed</p>
        </div>
        <div class="bg1 six">
            <h2><i class="fa fa-bed"></i>
            </h2>

            <p>Sleep Keep</p>
        </div>
        <div class="bg2 seven">
            <h2>16 <span>| 24</span></h2>
            <p> Goals completed</p>
        </div>
        <div class="bg1 eight">
            <h2><i class="fa fa-bed"></i>
            </h2>

            <p>Sleep Keep</p>
        </div>
        <div class="bg2 nine">
            <h2>16 <span>| 24</span></h2>
            <p> Goals completed</p>
        </div>
        <div class="bg1 ten">
            <h2><i class="fa fa-bed"></i>
            </h2>

            <p>Sleep Keep</p>
        </div>
        <div class="bg2 eleven">
            <h2>16 <span>| 24</span></h2>
            <p> Goals completed</p>
        </div>
        <div class="bg1 twelve">
            <h2><i class="fa fa-bed"></i>
            </h2>

            <p>Sleep Keep</p>
        </div>
    </div>
</body>
</html>