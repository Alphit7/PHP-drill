<html>

<head>
    <title>Hi!</title>
</head>

<body>
    <?php
    //foreach loops
    $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');
    foreach ($pronouns as $pronoun) {
        if ($pronoun == "He/She") {
            echo "<pre>";
            echo "$pronoun codes";
            echo "</pre>";
        } else {
            echo "<pre>";
            echo "$pronoun code";
            echo "</pre>";
        }
    }




    // $count = 1;
    // while ($count <= 120) {
    //     echo $count;
    //     $count++;
    // }
    // ;
    for ($count_for = 1; $count_for <= 120; $count_for++) {
        echo $count_for;
    }
    ;

    $namesTeam = array("Abel", "Alexandra", "Anthony", "Benjamin", "Bruno", "Delphine", "Emilien", "Ethan", "Ismaël", "Jodie", "Julien", "Louka", "Loïc", "Luciano", "Marine", "Nikko", "Noa", "Steve", "Sylvain", "Willy");

    foreach ($namesTeam as $name) {
        echo "<pre>";
        echo $name;
        echo "</pre>";
    }


    $countries = array(
        'BE' => 'Belgium',
        'NER' => 'Niger',
        'TGO' => 'Togo',
        'ZAF' => 'South Africa',
        'ARG' => 'Argentina',
        'AUS' => 'Australia',
        'AUT' => 'Austria',
        'GER' => 'Germany',
        'PL' => 'Poland',
        'RU' => 'Russia'
    );
    echo "<select>";

    foreach ($countries as $key => $value) {
        echo "<option value='$key'>$value</option>";
    }
    echo "</select>"
        ?>
</body>

</html>