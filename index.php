<?php
// Include the database connection file
include 'connection.php';






if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
$f_name = $_POST['fathername'];
$age = $_POST['age'];
$sql = "INSERT INTO students (name, father_name,age) VALUES ('$name','$f_name','$age')";
$result = $conn->query($sql);
if($result){
   echo "Sucessfully Entered";
}
else{
    echo "Error: " . $conn->error;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Minds</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css
    
    

    ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Jost:ital,wght@0,100..900;1,100..900&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    include( "components/header.php");
    
    ?>
    <section class="theme">
        <div class="container-1">
        <div class="main_theme">
            <div class="theme_text">
               <h1> Growup Your Learning
                Skills with Educate</h1>
                    <p>Educate the ultimate destination for knowledge seekers and educators alike. We are committed to transforming education</p>
                    <button>GET STARTED <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="theme_image">
                <img src="assets/Creative Minds_files/html-css-collage-concept-with-person.jpg" alt="">
            </div>
        </div>
    </div>
    </section>
    
    <section class="second">
      
        <div class="container-1">
        <div class="text">
         
            <div class="text_1">
                <h6> <i class="fa-solid fa-square fa-beat" style="color: #00ffff;"></i> core features</h6>
            </div>
            <div class="text_2">
          <p>Interactive Online Learning
            Key Features & Benefits</p>
            </div>
        </div>
        <div class="boxese">
            <div class="box_1">
                <i class="fa-solid fa-graduation-cap fa-2xl" style="color: #000000;"></i><h1>Learning Experiences
</h1>
<p>The ultimate destination for knowledge for We are committed to transforming

</p>
            </div>
            <div class="box_2">
                <i class="fa-solid fa-chalkboard-user fa-2xl" style="color: #000000;"></i>
                <h1>Professional Instructor</h1>
                <p>The ultimate destination for knowledge for We are committed to transforming

                </p>
            </div>
            <div class="box_3">
                <i class="fa-solid fa-money-check-dollar fa-2xl" style="color: #000000;"></i>
                <h1>Moneyback Guarantee
                </h1>
                <p>The ultimate destination for knowledge for We are committed to transforming

                </p>
            </div>
        </div>
    </div>
   
    </section>
<div class="form-container">
<form method="post">
        <input name="name" placeholder="name"type ="text">
        <input name="fathername" placeholder="fathername"type ="text">
        <input name="age" placeholder="age"type ="number">
<button name="submit" type="submit">submit</button>


        </form>
<?php 


?>
        </div>


    <script>function megamenu() {
            let mega = document.querySelector(".megamenu");
            mega.style.display = mega.style.display === "block" ? "none" : "block";
        }
    </script>
</body>

</html>