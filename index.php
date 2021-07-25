<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Survey</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h1>Service Survey</h1>
    <form method="post" action="index.php?hello=true">
      <p>Please Give Us The Following Accurate Information. </p>
      <p>First Name</p>
      <input type="text" placeholder="First Name" name="firstname"></input>
      <p>Last Name</p>
      <input type="text" placeholder="Last Name" name="lastname"></input>
      <p>How would you rate our service? 1-100. 1 being worst and 100 being best. </p>
      <input type="number" max="100" min="1" placeholder="Rating" name="rating"></input>
      <p>Email Address</p>
      <input type="email" placeholder="example@email.com" name="email"></input>
      <p>Which location did you visit?</p>
      <select name="location" id="loc" name="location">
        <option value="Los Angeles">Los Angeles</option>
        <option value="San Jose">San Jose</option>
        <option value="San Francisco">San Francisco</option>
        <option value="San Diego">San Diego</option>
        <option value="Redding">Redding</option>
      </select>
      <p>How likely would you recommend this to one of your friends?</p>
      <input name="recommend" type="radio" id="radio1" value="I_won't"></input>
      <label for="radio1">I won't</label>
      <input name="recommend" type="radio" id="radio2" value="maybe"></input>
      <label for="radio2">Maybe</label>
      <input name="recommend" type="radio" id="radio3" value="I_will"></input>
      <label for="radio3">I will</label>
      <!--
      <p>Comment on your above answer. </p>
      <textarea name="comment" id="textarea" cols="30" rows="10"></textarea>
      -->
      <input type="submit"></input>
    </form>
    <?php 
      function writemsg() {
        $myfile = fopen("test.txt", "a") or die("Unable to open file!");
        $txt = "First Name: ";
        fwrite($myfile, $txt);
        $txt = $_POST['firstname'];
        fwrite($myfile, $txt);
        $txt = "\nLast Name: ";
        fwrite($myfile, $txt);
        $txt = $_POST['lastname'];
        fwrite($myfile, $txt);
        $txt = "\nRating: ";
        fwrite($myfile, $txt);
        $txt = $_POST['rating'];
        fwrite($myfile, $txt);
        $txt = "\nEmail: ";
        fwrite($myfile, $txt);
        $txt = $_POST['email'];
        fwrite($myfile, $txt);
        $txt = "\nLocation: ";
        fwrite($myfile, $txt);
        $txt = $_POST['location'];
        fwrite($myfile, $txt);
        $txt = "\nRecommend: ";
        fwrite($myfile, $txt);
        $txt = $_POST['recommend'];
        fwrite($myfile, $txt);
        $txt = "\n------------------------------------------\n";
        fwrite($myfile, $txt);
        fclose($myfile);
      }
      if (isset($_GET['hello'])) {
        writemsg();
      }
     ?>
    <script src="script.js"></script>
  </body>
</html>
