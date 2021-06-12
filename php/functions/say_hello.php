<!-- Using switch case and dropdown list display a —Hello world message depending on the language selected in drop down list. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World in different languages</title>
</head>

<body>
  <form action="#" method="get">
    <select name="language" id="language">
      <option value="eng" <?php echo isset($_GET['language']) ? (($_GET['language'] == "eng") ? ("selected") : ("")) : ""; ?>>English</option>
      <option value="urd" <?php echo isset($_GET['language']) ? (($_GET['language'] == "urd") ? ("selected") : ("")) : ""; ?>>Urdu</option>
      <option value="kas" <?php echo isset($_GET['language']) ? (($_GET['language'] == "kas") ? ("selected") : ("")) : ""; ?>>Kashmiri</option>
      <option value="hin" <?php echo isset($_GET['language']) ? (($_GET['language'] == "hin") ? ("selected") : ("")) : ""; ?>>Hindi</option>
      <option value="tur" <?php echo isset($_GET['language']) ? (($_GET['language'] == "tur") ? ("selected") : ("")) : ""; ?>>Turkish</option>
    </select>
    <input type="submit" value="Say Hello">
  </form>
  <?php
  function greetInDifLang($lang)
  {
    switch ($lang) {
      case 'eng':
        echo "Hello";
        break;
      case 'urd':
        echo "Assalamo aleikum";
        break;
      case 'kas':
        echo "Hattoo";
        break;
      case 'hin':
        echo "Namaste";
        break;
      case 'tur':
        echo "Salam";
        break;

      default:
        echo " sdfjsfjlsdfjsdjfsl I dont understand the language";
        break;
    }
  }

  if (isset($_GET['language'])) {
    $language = $_GET['language'];

    //echo "Selected Language:" . $language . "<br>";

    greetInDifLang($language);
  }
  // else {
  //   echo "Else";
  // }
  ?>

</body>

</html>
<!--
    echo 
      isset($_GET['language']) 
        ?
          (($_GET['language'] == "eng") ? ("selected") : ("")) 
        : ""
 -->