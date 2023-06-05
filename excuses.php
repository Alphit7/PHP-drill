<html>

<head>
    <title>Hi!</title>
</head>

<body>
    <form action="" method="get">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <fieldset>
            <legend>Select the Gender of your child</legend>
            <input type="radio" name="gender" id="Boy" value="Boy" checked>
            <label for="Boy">Boy</label>
            <input type="radio" name="gender" id="Girl" value="Girl">
            <label for=" Girl">Girl</label>
        </fieldset>
        <label for="teacher">Name of the Teacher</label>
        <input type="text" id="teacher" name="teacher">
        <fieldset>
            <legend>Reason for the absence</legend>
            <input type="radio" name="absence" id="illness" value="illness" checked>
            <label for="illness">Illness</label>
            <input type="radio" name="absence" id="death" value="death">
            <label for="death">Death of a family member</label>
            <input type="radio" name="absence" id="activity" value="activity">
            <label for="activity">Significant extra-curricular activity</label>
            <input type="radio" name="absence" id="other" value="">
            <input type="text" name="absence_other" id="other__input">
            <label for="other">Other</label>
        </fieldset>
        <button type="submit">Submit</button>
    </form>
    <?php
    if (isset($_GET["name"]) and isset($_GET["gender"]) and isset($_GET["teacher"])) {
        $name = $_GET["name"];
        $gender = $_GET["gender"];
        $teacher = $_GET["teacher"];
    }

    ?>
</body>

</html>