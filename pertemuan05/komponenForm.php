<!DOCTYPE html>
<html>
<head>
    <title>Komponent Form</title>
</head>
<body>
    <h1>Belajar Komponent Forms</h1>

    <form action="metodeGetProses.php" method="get">
        <label for="inputBox01">Input Your Text</label>
        <input type="text" name="inputBox01">
        <br>
        <label for="inputBox02">Choose Your Options</label>
        <input type="checkbox" name="inputBox2[]" value="mandalorian"> Mandalorian
        <input type="checkbox" name="inputBox2[]" value="jedi"> Jedi
        <input type="checkbox" name="inputBox2[]" value="tusken"> Tusken 
        <input type="checkbox" name="inputBox2[]" value="hutt"> Hutt
        <br>
        <label for="inputBox03">Choose One Option</label>
        <input type="radio" name="inputBox3" value="good"> good
        <input type="radio" name="inputBox3" value="bad"> bad
        <br>
        <input type="submit" value="Proses">
    </form>
</body>
</html>
