<html>

<head>
    <title>Hi!</title>
</head>

<body>
    <?php
    $sentence = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
    $sentence_array = explode(' ', $sentence);
    foreach ($sentence_array as $word) {
        echo str_shuffle($word) . " ";
    }



    //1.
    function capitalize($name)
    {
        return ucfirst($name);
    }
    echo capitalize("sylvain");


    //2.
    echo date('Y');


    //3.
    echo date('d M Y H:m:s');

    //4.
    function adding($a, $b)
    {
        if (is_numeric($a) and is_numeric($b)) {
            return $a + $b;
        } else {
            echo "Error: argument is the not a number.";
        }
    }
    echo adding(7, 8);
    echo adding("Hello", 8);

    //5.
    function createAcronyme($str)
    {
        $str_array = explode(' ', $str);
        foreach ($str_array as $word) {
            $words = ucfirst($word);
            echo substr($words, 0, 1);
        }
    }
    echo createAcronyme("Hello world");

    //6.
    
    function replaceAE($word)
    {
        return str_replace("ae", "æ", $word);
    }
    echo replaceAE("caecotrophie");

    //7.
    
    function replace($word)
    {
        return str_replace("æ", "ae", $word, );
    }
    echo replace("cæcotrophie");


    //8.
    
    function createWarning($message, $class = "info")
    {
        $class_upper = ucfirst($class);
        echo "<div class='$class'>$class_upper: $message</div>";
    }
    createWarning("Incorrect email adress");


    //9.
    function generateRandomWord($minLength, $maxLength)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $length = mt_rand($minLength, $maxLength);
        $randomWord = '';
        for ($i = 0; $i < $length; $i++) {
            $randomWord .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
        return $randomWord;
    }

    $shortWord = generateRandomWord(1, 5);
    $longWord = generateRandomWord(7, 15);

    //10.
    echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

    //11.
    
    function calculateConeVolume($ray, $height)
    {

        $volume = $ray * $ray * 3.14 * $height * (1 / 3);

        echo "The volume of a cone which ray is $ray and height is $height = $volume";

    }

    calculateConeVolume(4, 19);

    ?>
    <h1>Generate a new word</h1>
    <p>
        <?php echo $shortWord; ?>
    </p>
    <p>
        <?php echo $longWord; ?>
    </p>
    <button onclick="location.reload()">Generate</button>

</body>

</html>