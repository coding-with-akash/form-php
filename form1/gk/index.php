<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <img class="img" src="iit.png" alt="iit">

    <div class="container">
        <h1>Wel-Come to IIT</h1>
        <p>Enter your details to conform your participation in the trip</p>
    <form action="form.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter you name">
            <input type="text" name="age" id="age" placeholder="Enter you age">
            <input type="text" name="gender" id="gender" placeholder="Enter you gender">
            <input type="email" name="email" id="email" placeholder="Enter you email">
            <input type="phone" name="phone" id="phone" placeholder="Enter you phone number">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any extra information here"></textarea>
            <button class="btn" name="submit">Submit</button>
    </form>
    
    </div>


    
</body>

</html>