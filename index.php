<html>
    <?php include "action.php";
    global $result;
    global $computer;
    ?>
    <head>
        <title>Rock Paper Scissors</title>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <form method="post">
            <div class="title">
                <h1 id="header">ROCK PAPER SCISSORS!</h1>
                <h2 id="credit">SIMPLE GAME MADE BY ZEROE</h2>
            </div>

            <div class="container">
                <p><b>Choose Your Move</b></p>
                <select name="choices" id="choice">
                    <option value="rock">Rock</option>
                    <option value="paper">Paper</option>
                    <option value="scissors">Scissors</option>
                </select>
                <input type="submit" value="Fight!" name="submit">

                <p><?php echo "The results are: $result" ?></p>
            </div>
        </form>
    </body>
</html>