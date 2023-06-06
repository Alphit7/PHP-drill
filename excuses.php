<html>

<head>
    <title>Hi!</title>
    <link rel="stylesheet" href="./assets/css/style.css">
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
            <input type="radio" name="absence" id="death" value="family member's funeral">
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
    $excuses = array(0 => "Dear Mr./Ms. $teacher, my $gender won't be able to come to school tommorow and I am really sorry about it. $name has to attend a $absence. I hope you understand, have a good day.", 1 => "Dear Mr./Ms. $teacher, I regret to inform you that my $gender will be unable to attend school tomorrow due to $name's unavoidable $absence. Please accept my apologies for any inconvenience caused. Thank you for your understanding. Have a wonderful day.", 2 => "Dear Mr./Ms. $teacher, I apologize for the short notice, but my $gender won't be able to come to school tomorrow. $name has an important $absence to attend. I sincerely hope you can understand the situation. Wishing you a pleasant day.", 3 => "Dear Mr./Ms. $teacher, I wanted to inform you that my $gender will be absent from school tomorrow. $name has an unavoidable $absence to attend. Please accept my apologies for any disruption caused. Your understanding is greatly appreciated. Have a great day.", 4 => "Dear Mr./Ms. $teacher, I regret to inform you that my $gender won't be able to attend school tomorrow due to $name's scheduled $absence. I apologize for any inconvenience this may cause and appreciate your understanding in this matter. Wishing you a fantastic day.");
    echo $excuses[rand(0, 4)];
    ?>
</body>

</html>