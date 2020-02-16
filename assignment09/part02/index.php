<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "1. My first favorite thing is raspberries.",
            "2. My second favorite thing is film.",
            "3. My third favorite thing is driving.",
            "4. My fourth favorite thing is bowling."
        );
    ?>

    <h1>My Favorite Things</h1>
        <!-- Task 3.2: Code to output things below -->
        <?php
        for ($i = 0; $i < count($my_favorite_things); $i++) {
            echo $my_favorite_things[$i]; 
            echo '<br>';
        }

        ?>


    </body>

