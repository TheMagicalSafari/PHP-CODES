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

# now you make another file to make a use of these classes with the same definition without facing any interruptions / errors
# check it out in this folder named # namespace_using.php
