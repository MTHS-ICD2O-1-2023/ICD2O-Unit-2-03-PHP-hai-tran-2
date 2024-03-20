<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The Address Program, in PHP" />
    <meta name="keywords" content="mths, ICD2O" />
    <meta name="author" content="Hai Tran" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-green.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Address webpage, with PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Address, with PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/street.jpg" alt="street image" />
        </div>
        <?php echo '<p>Enter address</p>'; ?>
        <br />
        <div class="page-content-php">
          <form action="answer.php" method="POST">
            <p>Street Number</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="street-number">
              <label class="mdl-textfield__label" for="age-input">Number here ...</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <p>Street Name</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" name="street-name">
              <label class="mdl-textfield__label" for="name-input">Name here ...</label>
            </div>
            <br />
            <!-- Accent-colored raised button with ripple -->
            <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          </form>
        </div>
      </main>
    </div>
  </body>
</html>