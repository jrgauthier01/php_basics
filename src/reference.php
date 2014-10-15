<?php 

 echo "allo \n"; 
 $variable1 = 1; 
 $variable2 = " test "; 
 $variable3 = array(1,2,3); 
 $variable4 = array("one","two","three"); 
 echo $variable4[0],"\n"; 
 $variable5=$variable4; 
 
 // A 2-D array : 
 
 $oxo = array( array(1,2,3), array(4,5,6), array(7,8,9)); 

 echo $oxo[0][1],"\n"; 
 
 $variable1+=1; 
 echo $variable1,"\n"; 

 // if statements : 
 // if ( $x > 12 && $y < 20) do_something(); 
 // the xor operator is interesting : 
 // if ($x == 1 xor $x == 2) 
 
 // String concatenation : 
 $msgs=2; 
 echo "You have " . $msgs . " messages. \n"; 
 // or you can do : 
 // $string .= $string2; // this appends string2 to string1 
 // string single quote : exactly what's in between 
 // string double quotes : you evaluate the variables if there's any. 
 
 
 // multiline coding : 
 $text = " agiasod as
 asodifsadfas 
 asodfiasdfaos "; 
 
 $number=123+566; 
 echo substr($number,1,1),"\n"; // (string,start,howmany) (arrays start at 0)
 
 // constants : 
 define("ROOT_LOCATION", "/usr/local/www/"); 
 $directory=ROOT_LOCATION; // no dollar sign
 
 // There are some predefined constants used by PHP : 
 echo "This is line " . __LINE__ . " of file " . __FILE__ . "\n";
 
 $b=1; 
 // print here and not echo. In genral print as more flexibility 
 // but it's also a bit slower : 
 //b ? print "TRUE" : print "FALSE"; 
 
 // functions : 
 function test_function($timestamp)
 {
  return date("l F jS Y", $timestamp); 
 }
 date_default_timezone_set("America/Los_Angeles"); 
 echo time(),"\n"; 
 echo test_function(time()),"\n"; 
 
 // global variables : 
 global $variable_here; 
 // static variables : 
 // a variable in a function for which the value will be remembered 
 // next time the same function is called. That variable is only 
 // accessed by the function. 
 // e.g. : 
 function test()
 {
  static $count = 0; 
  echo $count; 
  $count++;
 }
 
 // Some superglobal variables are alreay available : 
 // e.g. where you came from : 
 // Use these superglobal variables with caution 
 // see p. 86 of the pdf. 
 $came_from=$_SERVER['HTTP_REFERER']; 
 // sanitize first : 
 $came_from=htmlentities($_SERVER['HTTP_REFERER']);
 echo "a: [" . (20 > 9) . "]<br />";
 // if you want to compare strings, use the identity operator. 
 // otherwise the strings will be converted into numbers : 
 if ($string1 === $string2)  // or : !===
  {
    echo "The two strings are equal \n"; 
  }
 elseif ($string1 !=== $string2)
  {
    echo "The strings are not equal \n"; 
  }
 else 
  {
    echo "Something is wrong here \n"; 
  }
  
 // The switch statement : 
 $page="Home"; 
 switch ($page)
  {
   case "Home": 
    	echo "You Selected Home"; 
		break; 
   case "Sales": 
   		echo "blablabla"; 
   		break; 
   default: 
   		echo "Wrong page"; 
        break; 
  } 
  
 // The ? Operator : 
 echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel"; 
 // with a condition : 
 $enough = $fuel <= 1 ? FALSE : TRUE;
  
 // if you use OR, if the first expression 
 // is true, the ** SECOND ONE WON'T be evaluated *** 
 // use && and || or  do the assignments before the 
 // if statement is called. 
 // e.g. : 
 if ($finished == 1 OR getnext() == 1) exit;
 // could be : 
 $gn = getnext();
 if ($finished == 1 OR $gn == 1) exit;
 
 // while loops : 
 while($fuel > 4)
 {
   echo "Don't go to the gas station \n"; 
 }
 
 // do while : 
 $count=0; 
 do{
 
   echo "in the loop"; 
 } while(++$count <= 12); 
 
 // for loops : 
 for($count=1; $count<=12; ++$count)
  {
    echo "something\n"; 
    echo "if you want to get out of the 
          for loop, do this : \n"; 
    if($count==5) break; 
  }
 $fp = fopen("text.txt", 'wb'); 
 for ($j = 0 ; $j < 100 ; ++$j) 
  {
   $written = fwrite($fp, "data");
   if ($written == FALSE) break; 
  } 
 fclose($fp); 
 
 // the continue operator. 
 // you just break the current iteration : 
 // e.g.: 
 while ($j > −10)
  {
   $j--;
   if ($j == 0) continue; echo (10 / $j) . "<br />"; 
  }
 
 // ========================= FUNCTIONS AND METHODS ========================= 
 // NOTE THAT FUNCTION NAMES ARE CASE INSENSITIVE 
  
 print("print is a function"); 
 phpinfo(); 
 
 // you can return an array, for example : 
 function fix_names($n1, $n2, $n3)
  {
   $n1 = ucfirst(strtolower($n1)); 
   $n2 = ucfirst(strtolower($n2)); 
   $n3 = ucfirst(strtolower($n3)); 
   return array($n1, $n2, $n3);
  }
 
// The include statement : 
// it's like to copy the file at the insertion point : 
include "library.php";  
// Actually, to avoid multiple inclusions (libraries whithin 
// libraries-type problem, use: 
include_once "library.php"; 
// NOTE THAT PROGRAM EXECUTION WILL CONTINUE WHETHER OR NOT 
// THE FILE IS FOUND. 
// IN ORDER TO AVOID THIS PROBLEM, YOU NEED TO REQUIRE THE FILE : 
require_once "library.php"; 
// you can check if a function exists by calling : 
function_exists("name_of_function"); 
echo phpversion(); 

// ========================= CLASSES ============================
// data associated with classes are called properties while its 
// functions are called methods. 
// inheritance : superclass and subclass (aka derived class) : 
$object = new User; 
$tmp = new User("John","12345"); 
$object->name = "Idiot"; 
$object->password = "SuperIdiot"; 
$object->save_user(); 

class User
{
 public $name, $password; 

 function save_user()
  {
    echo "bla bla bla"; 
  }

 public function do_something()
 {
   echo "you can call this function from outside the class"	
 }
	
}
$tmp->do_something(); 

print_r($object); // this is a very useful function. It prints 
				  // info about the a variable in a human-readable 
				  // format. 
				  
// if you do : 
$object1=new User(); 
// and : 
$object2=$object1; 
// object2 and object 1 are the SAME OBJECT. 
// you need to clone in order to have to separate objects i.e. : 
$object2 = clone $object1; 

// CONSTRUCTORS ---------
class User {

  function __construct($param1, $param2) 
   {
    // Constructor statements go here
    public $username = "Guest";  
   }
  // destructor : 
  function __destruct() 
    {
     // code in here
    }

  function get_password()
    {
      return $this->password; 
    }
}

// Note that you can also create static methods which are 
// called on a class and not on an object. A static method 
// has no access to any object properties : 
User::pwd_string(); 

class User 
{

  static function pwd_string()
     {
       echo "please enter your password\n"; 
     }
}

// you can also declare properties implicitely : 
// e.g. : 
class User{
 public $name; 
 public $password; 
}; 
$object1 = new User(); 
$object1->name = "Alice"; 
echo $object1->name;

// you can set default values : 
class Test 
{
 public $name = "Paul Smith"; // Valid
 public $age = 42; // valid 
 public $time = time(); // Invalid - calls a function
 public $score = $level * 2; // Invalid - uses an expression
}			  
				  
// Constants : 
Translate::lookup(); 
class Translate
{
 const ENGLISH = 0; 
 const SPANISH = 1; 
 const FRENCH = 2; 
 const GERMAN = 3; // ...
 static function lookup()
  {
   echo self::SPANISH; 
  }
}

// public, protected, and private : 
class Example {
var $name = "Michael"; 
public $age = 23; 
protected $usercount; //
private function admin() 
{
// Admin code goes here 
}
}

// See static properties on p. 137 of the pdf 

// INHERITANCE ==================================
// e.g.: 
class Subscriber extends User 
{
 public $phone; 
 public $email; 
 function display()
  {
   echo $this->name; 
   echo $this->password; 
   echo $this->phone; 
   echo $this->email; 
  }
}
// If two methods have the same name, the subclass 
// one will be called. If not what you want, you can 
// create a function that will call : parent::test(). 
// see p. 139 of the pdf. To ensure that you code 
// calls a method from the current class, use : self::method(); 

// Constructors of subclasses : 
class Tiger extends Wildcat 
{
 public $stripes; 
 function __construct() 
  {
    parent::__construct(); 
    $this->stripes="TRUE"; 
  }
}

// this code increments the array of paper every time 
// a new value is assigned : 
$paper[] = "copier"; 
$paper[] = "Inkjet"; 
$paper[] = "Laser"; 
$paper[] = "Photo"; 
// is the same as : 
$paper[0] = "copier"; 
$paper[1] = "Inkjet"; 
$paper[2] = "Laser"; 
$paper[3] = "Photo"; 

// Associative Arrays : 
$paper['copier'] = "Copier & Multipurpose"; 
$paper['inkjet'] = "Inkjet Printer"; 
$paper['laser'] = "Laser Printer"; 
$paper['photo'] = "Photographic Paper";
// or html parser : 
$html['title']="My web page"; 
$html['body']="... body of the web page"; 

// Assignment using the array keyword : 
$p2 = array('copier' => "Copier & Multipurpose", 
            'inkjet' => "Inkjet Printer"); 
 
// foreach as loop : 
foreach ($paper as $item => $description)
  echo "$time: $description"; 
// alternatively you can use the list() and while loop : 
while (list($item, $description) =each($paper)) 
  echo "$item: $description";  
  
// creating a multi-dimensinal associative array : 
// e.g.: 
$products = array(
 'paper' => array(
            'copier' => "Copier & Multipurpose", 
            'inkjet' => "Inkjet Printer", 
            'laser' => "Laser Printer",
		    'photo' => "Photographic Paper"),

 'pens' => array(
            'ball' => "Ball Point", 
            'hilite' => "Highlighters", 
            'marker' => "Markers"),

 'misc' => array(
			'tape' => "Sticky Tape", 
			'glue' => "Adhesives", 
			'clips' => "Paperclips") 
 );
echo "<pre>";
foreach ($products as $section => $items)
   foreach ($items as $key => $value)
      echo "$section:\t$key\t($value)<br>";
echo "</pre>";
 
// ARRAY FUNCTIONS =============================================

is_array($name); // to check whether the variable $name is an array or not. 

count($array_variable); // to count the number of elements in the array 

sort($array_variable); // sort the array. It doesn't create a new array. Just 
					   // rearranges elements in the array 
					   
sort($array_variable, SORT_NUMERIC); 
sort($array_variable, SORT_STRING); 

shuffle($array_variable);  // randomize the order of the elements in the array. 

// *** VERY USEFUL *** : 
$tmp = explode(' ',"This is an interesting article"); 
print_r($temp); 

// use : (see pdf p. 154 
extract($_GET, EXTR_PREFIX_ALL, 'fromget'); 
// to add prefix : e.g. fromget_q good for security. 
 
// compact is the inverse of extract 
// e.g.: 
$fname = "Elizabeth";
$sname = "Windsor";
$address = "Buckingham Palace"; 
$city = "London";
$country = "United Kingdom";
$contact = compact('fname', 'sname', 'address', 'city', 'country'); 
print_r($contact);

// reset function : 
$item=reset($fred); // keep first element of the array in $item 

// end function : 
end($fred); 
$item=end($fred); // keeps the last element of the array in $item

// Practical PHP ===============================================

printf("There are %d items in your basket \n", 3); 
printf("The result is: $ %.2f", 123.42 / 12);

// check out formatting and string padding options on p. 160 of the pdf. 

echo time(); 

echo mktime(0, 0, 0, 1, 1, 2000); // see p. 162 of pdf. 
date($format, $timestamp); 
// check : http://tinyurl.com/phpdatefuncs 
echo date("l F jS, Y - g:ia", time());

// check date Constants on p. 164 of the pdf. 

// File handling ================================================ : 
// stick to a lower-case convention for filenames. 

// check if a file exists : 
if (file_exists("testfile.txt")) echo "File exists";

$fh = fopen("testfile.txt", 'w') or die("Failed to create file"); 
$text = <<<_END
Line 1
Line 2
Line 3
_END;

// Read file : 
$fh = fopen("testfile.txt", 'r') or
die("File does not exist or you lack permission to open it"); 
$line = fgets($fh);
fclose($fh);
echo $line;

// Copying files : 
copy('file1.txt','file2.txt') or die("Could not copy file"); 
echo "File successfully copied to 'testfile2.txt"; 
// or : 
if (!copy('file1.txt','file2.txt')) echo "we have a problem"; 

// move a file : 
if (!rename('file1.txt','file2.txt'))
 echo "problem"; 
 
// deleting a file : 
// if (!unlink('testfile')) echo blabla; 

// updating a file : 
$fh = fopen("testfile.txt", 'r+') or die("Failed to open file"); 
$text = fgets($fh);
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die("Could not write to file"); 
fclose($fh);
echo "File 'testfile.txt' successfully updated";

// to go to a specific position, e..g 18 : 
fseek($fh, 18, SEEK_SET);
// to 23 from 18 : 
fseek($fh, 5, SEEK_CUR);

// Locking files for Multiple Accesses : 
// function is flock : 
// e.g. : 
$fh = fopen("testfile.txt", 'r+') or die("Failed to open file"); 
$text = fgets($fh);

if (flock($fh, LOCK_EX)) 
{
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die("Could not write to file"); 
flock($fh, LOCK_UN);
}
fclose($fh);
echo "File 'testfile.txt' successfully updated";

// try to call it right before and end it right after the fwrite function 

// to read an entire file : 
// use : file_get_contents("testfile.txt"); 
// e.g. : file_get_contents("http://oreilly.com"); 

// Uploading files : 
e.g.:  
<?php // upload.php
echo <<<_END
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
Select File: <input type='file' name='filename' size='10' /> <input type='submit' value='Upload' />
</form>
_END;

// see page 174 : 
if ($_FILES) {
 $name = $_FILES['filename']['name']; 
 move_uploaded_file($_FILES['filename']['tmp_name'], $name); 
 echo "Uploaded image '$name'<br /><img src='$name' />";
}

// $_FILES['file']['name'], $_FILES['file']['type'], $_FILES['file']['size'], $_FILES['file']['tmp_name']
// $_FILES['file']['error']. 

// types are (p. 175): 
// application/pdf application/zip audio/mpeg, image/gif, image/jpeg, image/png, etc... 

// Form Data Validation : 

<?php // upload2.php
echo <<<_END
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='upload2.php' enctype='multipart/form-data'> Select a JPG, GIF, PNG or TIF File:
<input type='file' name='filename' size='10' />
<input type='submit' value='Upload' /></form>
_END;
if ($_FILES) {
$name = $_FILES['filename']['name'];
switch($_FILES['filename']['type']) 
 {
 case 'image/jpeg': $ext = 'jpg';  break; 

 case 'image/gif': $ext = 'gif'; break; 

 case 'image/png': $ext = 'png'; break; 

 case 'image/tiff': $ext = 'tif'; $ext = '';

default: $ext = ''; break; 
}

if ($ext) 
{
  $n = "image.$ext"; 
  move_uploaded_file($_FILES['filename']['tmp_name'], $n); 
  echo "Uploaded image '$name' as '$n':<br />";
  echo "<img src='$n' />";
 }
 else echo "'$name' is not an accepted image file"; 
}
else echo "No image has been uploaded";
echo "</body></html>"; 
?>

// A good thing to do, switch to lower case : 
$name = strtolower(preg_replace("/[^A-Za-z0-9.]/", "", $name));

// System Calls =================================================

e.g.: 
$cmd="ls"; 
exec(escapeshellcmd($cmd), $output, $status); 
if ($status) echo "Exec command failed"; 

// You should also note the use of the escapeshellcmd function. 
// It is a good habit to always use this when issuing an exec 
// call because it sanitizes the command string, preventing the 
// execution of arbitrary commands should you supply user input to the call.
// Benefits of XHTML : Many. Code is more compact, faster parser, etc. 
// Start using it now. 
// <input type='submit' />
// <p> </p> 
// <b> fagagasdf <i>something</i></b>
// all lsower-case tags. 
// * * * SEE PAGE : 180 of PDF 
// xhtml validation : go to page : p. 182 

// sql is case insensitve 

// FORM HANDLING ================================================
// p.282 of the pdf. 
// Always initialize every variable you use !!! 




?>
