$input = "A sentence terminated by ;

Another sentence terminated by;

Yet another sentence terminated by.

Here is another sentence.";

$count = strlen($input);

$new_str = "";
for($i = 0; $i < $count; $i++) {
      if($i == 0) {
            $new_str .= "<p class=\"lp-txt\">" . $input[$i];
      }
      else if($input[$i] == ';' and $i != $count - 1) {
            $new_str .= ";" . "<p class=\"lp-txt\">";
      }
      else if($input[$i] == '.' and $i != $count - 1) {
            $new_str .= "." . "<p class=\"lp-txt\">";
      }
      else {
            $new_str .= $input[$i];
      }
}

print($new_str);
