<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Random Fact</title>
</head>
<body>
    <main>
    <h1>Shobhit's Joke Page</h1>
    <br>
    <h4>Welcome to Shobhit's jokes which are really good</h4>
        
        <?php
             $facts = ["Why do birds fly to warmer climates in the winter? It’s much easier than walking!",
                       "What creature is smarter than a talking parrot? A spelling bee.",
                       "Why did the banana go to the hospital? He was peeling really bad.",
                      "How does the ocean say hello? It waves.",
                      "What do you call a fake noodle? An im-pasta.",
                      "Why can’t you trust atoms? They make up everything.",
                      "What did one plate whisper to the other plate? Dinner is on me."];
            
            echo "<h5>{$facts[rand ( 0 , 6 )]}</h5>"
             ?>
         
        <form action="HW-random-fact.php" method="post">
        <input class="submit" type="submit" value="Get another Joke!">
        </form>
    </main>
    
    
</body>
</html>