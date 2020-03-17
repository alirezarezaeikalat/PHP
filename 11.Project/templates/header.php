<?php 
  session_start();
  if($_SERVER['QUERY_STRING'] == 'noname'){
    unset($_SESSION['name']);
  }
  // we can use else for saving $name variable or use null coalescing

  $name = $_SESSION['name'] ?? 'Guest';

  // get cookie
  echo $_COOKIE['gender'];
  $gender = $_COOKIE['gender'] ?? 'Unknown';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alireza Pizza</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <style type="text/css">
    .brand {
      background: #cbb09c !important;
    }

    .brand-text {
      color: #cbb09c !important;
    }
    .form {
      padding: 20px !important;
    }
    .pizza {
      width: 100px;
      margin: 40px auto -30px;
      display: block;
      position: relative;
      top: -30px;
    }

    .flex {
      display: flex;
      flex-wrap: wrap;
    }
  </style>
</head>

<body class="grey lighten-4">
  <nav class="white z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text">Alireza Pizza</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li class="grey-text">Hello <?php echo htmlspecialchars($name); ?><span>(<?php echo htmlspecialchars($gender); ?>)</span></li>
        <li>
          <a href="add.php" class="btn brand z-depth-0">
            Add a pizza
          </a>
        </li>
      </ul>
    </div>
  </nav>