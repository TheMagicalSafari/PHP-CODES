// hello my world - this is Erfan motallebi
// we're going to pick up the concept behind the namespace

/*
definition of namespace:
Imagine you're gonna make a unique file with 2 classes but the same name - this will never be possible alone.
with the use of  [ namespaces ] we're able to make it happen however.

imagine we have : 

this file is named html.php
          1. same file
          2. same classes
                        result -> we made it happen through namespaces [ easy as a pie. }

Caution : 
              namespaces MUST be declared on the very first line to be included or conveyed into the specific file and
              this is a MUST-DO. as we can see below:
*/

# you can check this issue out using deleting the one of the namespaces in this file [ it will print out an errpr ]

# html.php

<?php
namespace html1;

class Table { // same class [ slide down to see another class with the same declaration
    public $title = "";
    public $numRows = 0;
  
    public function message() {
      echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
  }
  
  class Row {
    public $numCells = 0;
    public function message() {
      echo "<p>The row has {$this->numCells} cells.</p>";
    }
  }


?>

<?php
namespace html2;
class Table { // the second with the same class shown above
    public $title = "";
    public $numRows = 0;
  
    public function message() {
      echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
  }
  
  class Row {
    public $numCells = 0;
    public function message() {
      echo "<p>The row has {$this->numCells} cells.</p>";
    }
  }

?>

# in this file, we're going to utilize the file named # PHP_NAMESPACE.php
/*
now we're gonna declare the same classes withtout any problems or snags

shown as follows:
*/
# Interpret this file though an IDE, to wit Sublime 3, VScode, ATOM so as to understand the concepts behind namespaces
# Hint: you need the first file called # PHP_NAMEPSACE in this folder to give this action a meaning.

# namespace.php
<?php
include('html.php');
$table1 = new html1\Table();
$table1->title="First HTML1";
$table1->numRows=5;

$table2 = new html2\Table();
$table2->title="Second HTML2";
$table2->numRows = "10";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>namespace php</title>
</head>
<body>
    <?php $table1->message()?>
    <?php $table2->message()?>
</body>
</html>
