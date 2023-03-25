<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= en, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css" />
</head>
<body>
    <section id="form">
        <form action="" class="log-form">
            <fieldset id=""user-essential-details>
                <input type="text" name="userName" required id="user-name" placeholder="Enter Your Name">
                <input type="date" name="dateOfBirth" required id="date-of-birth">
                <label for="male">Male</label>
                <input type="radio" 
                name="gender"  id="male" value="Male" />
                <label for="female">Female</label>
                <input type="radio" 
                name="gender"  id="female" value="Female" />
                <label for="status">Status</label>
                <select name="status" id="status" requi
                >
                    <option value="Married">Married</option>
                    <option value="Single">Single</option>
                    <option value="Reserved">Prefer Not To Say</option>
                </select>
                <input type="tel" name="contact" required id="contact">
                <input type="button" value="Continue" id="continueOne">
            </fieldset>
        </form>
    </section>
</body>
</html>