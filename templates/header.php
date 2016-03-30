<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chores List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    <!-- Materialize Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Calendar -->
    <link rel='stylesheet' href='../templates/fullcalendar-2.6.1/fullcalendar.css' />
    <script src='../templates/fullcalendar-2.6.1/lib/jquery.min.js'></script>
    <script src='../templates/fullcalendar-2.6.1/lib/moment.min.js'></script>
    <script src='../templates/fullcalendar-2.6.1/fullcalendar.js'></script>

    <style>
  /* label color */
     .input-field label {
       color: gray;
     }
     /* label focus color */
      textarea.materialize-textarea:focus:not([readonly]) + label,
     .input-field input[type=email]:focus + label,
     .input-field input[type=password]:focus + label,
     .input-field input[type=text]:focus + label {
       color: #009688;
     }
     /* label underline focus color */
      textarea.materialize-textarea:focus:not([readonly]),
     .input-field input[type=email]:focus,
     .input-field input[type=password]:focus,
     .input-field input[type=text]:focus {
       border-bottom: 1px solid #009688;
       box-shadow: 0 1px 0 0 #009688;
     }
     /* valid color */
     .input-field input[type=password].valid,
     .input-field input[type=email].valid,
     .input-field input[type=text].valid {
       border-bottom: 1px solid #009688;
       box-shadow: 0 1px 0 0 #009688;
     }

    nav {
        margin-bottom: 40px;
    }
    .nav-wrapper {
        padding: 0 55px;
    }
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }
    .content {
        flex: 1;
    }
    footer {
        color: white;
        padding: 0 55px;
    }

    .error {
        padding: 10px;
        color: red;
    }
    </style>

</head>
<body>
    <nav>
        <div class="nav-wrapper teal">
            <a href="index.php" class="brand-logo">Chores</a>

<!--
                <form method="post" action="/formsInPhp/session/destroy.php">
                      <input style="font-size: 1rem;" class="waves-effect waves-light right hide-on-med-and-down" type="submit" name="submit" value="Sign out">
                </form>
-->
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/slim_api/index.php/chores">Calendar</a></li>
              </ul>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!--
                <li><a href="/formsInPhp/user/new.php">Sign up</a></li>
                <li><a href="/formsInPhp/session/edit.php">Sign in</a></li>
                -->
              </ul>
        </div>
      </nav>
    <div class="container content">
