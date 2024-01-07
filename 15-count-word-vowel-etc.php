<!DOCTYPE html>
<html lang="en">
<head>
  <title>Count Words, Vowels, Consonants, Digits, Spaces and Symbols</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="str" placeholder="Enter the string">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $str = $_POST['str']; 
      $symbols = array('!','@','#','$','%','^','&','*','(',')','-','_','+','=','{','}','[',']','|','\\',':',';','"',"'",'<','>',',','.','?','/','`','~');
      $d = preg_match_all('/[0-9]/', $str);
      $v = preg_match_all('/[aeiou]/i', $str);
      $c = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $str);
      $s = 0;
      for($i = 0; $i < strlen($str); $i++){
        if (in_array($str[$i], $symbols)){
          $s++;
        }
      }
      echo "Number of Words in $str is ".str_word_count($str)."<br>";
      echo "Number of Digits in $str is $d<br>";
      echo "Number of Vowels in $str is $v<br>";
      echo "Number of Consonants in $str is $c<br>";
      echo "Number of Spaces in $str is ".substr_count($str, ' ')."<br>";
      echo "Number of Symbols in $str is $s<br>";
    }
  ?>
</body>
</html>
