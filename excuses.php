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
            <input type="radio" name="gender" id="Boy" value="boy" checked>
            <label for="Boy">Boy</label>
            <input type="radio" name="gender" id="Girl" value="girl">
            <label for=" Girl">Girl</label>
        </fieldset>
        <label for="teacher">Name of the Teacher</label>
        <input type="text" id="teacher" name="teacher">
        <fieldset>
            <legend>Reason for the absence</legend>
            <input type="radio" name="absence" id="illness" value="doctor's apointment" checked>
            <label for="illness">illness</label>
            <input type="radio" name="absence" id="death" value="funeral">
            <label for="death">death of a family member</label>
            <input type="radio" name="absence" id="activity" value="important extra-curricular event">
            <label for="activity">significant extra-curricular activity</label>
            <input type="radio" name="absence" id="other" value="">
            <input type="text" name="absence_other" id="other__input">
            <label for="other">Other</label>
        </fieldset>
        <button type="submit">Submit</button>
    </form>
    <?php
    if (isset($_GET["name"]) and isset($_GET["gender"]) and isset($_GET["teacher"]) and isset($_GET["absence"]) and $_GET["absence_other"] == "") {
        $name = $_GET["name"];
        $gender = $_GET["gender"];
        $teacher = $_GET["teacher"];
        $absence = $_GET["absence"];
    } else {
        $name = $_GET["name"];
        $gender = $_GET["gender"];
        $teacher = $_GET["teacher"];
        $absence = $_GET["absence_other"];
    }
    echo "Dear $teacher, my $gender won't be able to come to school tommorow and I am really sorry about it. $name has to attend a $absence. I hope you understand, have a good day.";
    ?>
</body>

</html>