<!DOCTYPE html>
<head>
    <title>GuestBook</title>
    <meta charset="utf-8" lang="en">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>GuestBook</h1>

<form action="/register" method="post">
    <label for="name">Name</label>
    <div>
        <input type="text" id="name" name="name">
        <?php
        if($errors->has('name')){
            echo '<label class="error">Name required</label>';
        }
        ?>
    </div>
    <label for="email">Email</label>
    <div>
        <input type="text" id="email" name="email">
        <?php
        if($errors->has('email')){
            echo '<label class="error">Email required</label>';
        }
        ?>
    </div>
    <input type="submit" value="Save">
</form>
</body>
</html>
