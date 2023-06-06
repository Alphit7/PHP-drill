<html>

<head>
    <title>Hi!</title>
</head>

<body>
    <?php
    $family = array("Marianne", "Philippe", "Arnaud", "Mélanie", "Sylvain");
    print_r($family);
    $films = array("Akira", "Iron Giant", "Guardians of the Galaxy");
    print_r($films[1]);
    $me = array(
        "firstname" => "Sylvain",
        "lastname" => "Jacobs",
        "age" => 26,
        "status" => "In a relationship",
        "man" => true,
        "favorite_movies" => array("Akira", "Iron Giant", "Guardians of the Galaxy"),
        "hobbies" => array("Video games", "Cinema", "Manga reading")
    );
    $mom = array(
        "firstname" => "Marianne",
        "lastname" => "Fievet",
        "age" => 60,
        "status" => "Married",
        "man" => false,
        "favorite_movies" => array("Cloclo", "Belle et Sébastien"),
        "hobbies" => array("Badminton", "Walking", "Running")
    );
    array_push($me["hobbies"], "taxidermy");
    $me["lastname"] = "Durand";
    $me["mom"] = $mom;
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    echo "<pre>";
    echo count($me);
    echo "</pre>";
    echo "<pre>";
    echo count($me["hobbies"]);
    echo "</pre>";
    echo "<pre>";
    echo count($me) + count($me["hobbies"]);
    echo "</pre>";


    $girlfriend = array(
        "firstname" => "Lola",
        "lastname" => "Mathy",
        "age" => 22,
        "status" => "In a relationship",
        "man" => false,
        "favorite_movies" => array(),
        "hobbies" => array("Dancing", "Singing", "Theatre")
    );
    $child1 = array_intersect($me["hobbies"], $girlfriend["hobbies"]);
    echo '<pre>';
    print_r($child);
    echo '</pre>';
    $child2 = array_merge($me["hobbies"], $girlfriend["hobbies"]);
    echo '<pre>';
    print_r($child2);
    echo '</pre>';



    $web_development = array("frontend" => array(), "backend" => array());
    array_push($web_development["frontend"], "xhtml");
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    array_push($web_development["backend"], "Ruby on rails");
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    array_push($web_development["frontend"], "CSS");
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    array_push($web_development["frontend"], "Flash");
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    array_push($web_development["frontend"], "Javascript");
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    $web_development["frontend"[0]] = "html";
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    array_splice($web_development["frontend"], 2, 1);
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';
    ?>
</body>

</html>