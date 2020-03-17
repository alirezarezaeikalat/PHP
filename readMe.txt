1. You can change the port of xampp:
first you have to go in Volumes tab of the software Choose Mount
and go to etc folder and change the port in httpd.conf file.

2. The files that load in localhost is in htdocs folder when
you explore the mount folder of the xampp

3. When you go to localhost url we load index.php file in
the htdocs folder and in that index.php file the php file 
navigate us to the dashboard folder then it loads index.html
file.

4. you can write php codes in <?php ?>

5. You can embed html tags in php files.

<h1> <?php echo "Hello ninjas"; ?></h1>

6. You can use variables and constant in php:
$name = "alireza";
define("NAME", "Alireza");

7. Strings in php
  a. You can concate two strings with .   $name . $lastName;
  b. You can use variables in "" but not in '' for example:
      "my name is $name"
  c. You can use escape character "you are a \"jerk\" "
  d. You can take characters in string : $name[0]
  e. You can find the length of the string by strlen($name);
  f. You can use strtoupper($name);  /  strtolower($name);
  g. str_replace('ma', 'wb' , $name);

8. We can use these functions for numbers

    a. echo floor($pi);
    b. echo ceil)($pi);

9. Indexed Arrays:

    a. We can print arrays with print_r($ages);   (print readable)
    b. We can add element to the end of arrays in two ways:
        $people[] = "ghasem";   or array_push($people, "ghasem");
    c. we can remove the last element:
        $poped = array_pop($people); 
    d. We can use count($people);   to see the length of the arrays
    e. we can merge two array together : 
        $people3 = array_merge($people , $people2);

10. Associative arrayes:

    a. $ninjaOne = ['shaun' => 'belt', 'Ryu' => 'Red'];
    b. We can push new item:
      $ninjaOne['abas'] = 33;
    c. We can also merge associative arrays.
     
11. Multidimensional arrays:

    $blogs = [
      ['mario kart' , 32 , 'lorem'],
      ['mario party', 25 , 'lorem']
    ];
    or 
    $blogs = [
      ['title' => 'mario kart', 'page' => 32, 'content' => 'lorem'],
      ['title' => 'mario party', 'page' => 42, 'content' => 'lorem']
    ];

12. Loops:
  for($i = 0; $i < 5; $i++){

  }
  or
  foreach($blogs as $blog){

  }

  13. If you echo the booleans:
    echo true;   string of 1
    echo false;  string of empty 
  
  14. you can put variable in ""
    echo "$name"
    but you can't use: echo "$product['name']"
    you have to use: echo "{$product['name']}"

  15. scope of variables:

      In php if there is no local variable unlike js we get an error
      but we can make it global and override the global varibale too:

      $name = 'alireza';

      function sayHello(){
        global $name;
        $name = 'ghasem';   // overriding the global variable
        echo $name;
      }

      [Attention]
      php is call by value for primitive types in default
      but you can make it pass by reference:
      function(&$name){
        $name = 'Wario'  // It is going to update the passed variable
      }

16. require and include:
    when we use require(''); if the file doesn't exist the file is not
    going to execute. 

17. action attribute in the form determines the file to handle the 
form data

18. We can use isset() function to check if some variable is set or not

19. We can use $_GET[''] array for the variables that sends to us with
  get method. $_GET is a associative array

[ATTENTION]
20. for protecting from XSS attacks always use htmlspecialchars() to make
  the special characters to html entities(string that start with & and
  ends with semicolon). always for echoing to the browser

21. It is always good idea to check form inputs in server side as well as
  front side using empty() function

22. We can use filters (built in functions) in PHP for validating inputs
    for example:
              filter_var($email, FILTER_VALIDATE_EMAIL);

23. We can use preg_match(regex, var) fucntion to check for the 
regular expression. (regex and var are strings)

24. array_filter($someArray, $callback=null)
   cycle through the elements and perform call back function if 
   the call back returns true for a element that element will be in
   the return array else it will remove, remember the index of the 
   array will be saved

25. header('Location: index.php');
    we can redirect to another file with 302 code; 

26. in mysql there is no string for column instead it has VARCHAR you can
use this with max-length of 255, and use TIMESTAMP for created_at

27. When we make the id auto increment if we delete a row, the next id
is somehow is like that row in not deleted, you can change this by 
updating the auto increment of id

28. We can connect to database using MySQLi or PDO:
    check the index.php file for the instruction of using MySQLi
    mysqli_connect($host, $user, $password, $database)
    mysqli_connect_error()

29. get data from database:

    a. first create your query as string
    b. then use $result = mysqli_query($conn, $sql); to perform the query 
    c. then fetch the data: 
        $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

30. after getting the data is good practice to free the $result and
    close the connection:

    a. mysqli_free_result($result);
    b. mysqli_close($conn);

31. We can use explode(',' , $pizzas[0]['ingredients']) to take
  array out of strings

[ATTENTION]
32. we can use : instead of starting { and use endforeach instead
  of the }

    <?php foreach($pizzas as $pizza): ?>
    <?php endforeach; ?>

    ///////// another example  ////

    <?php if(): ?>
    <?php else: ?>
    <?php endif; ?>

33. When ever you want to add to or get from database that comes
  from user use $email = mysqli_real_escape_string($_GET['$email']);

34. saving data to data base use:
    a. $email = mysqli_real_escape_string($conn, $_POST['email']);
    b. $sql = INSERT INTO pizzas(email) VALUES ('$email')";
    c. if(mysqli_query($conn, $sql)){
          echo 'ok';
        }else{
          echo 'db error' . mysqli_error();
        }

35. when we get data from database:
  we can use mysqli_fetch_all($result, MYSQLI_ASSOC); for getting all
  the rows but if there is one row we can use 
  mysqli_fetch_assoc($result);

36. We can add additional info to query string and get that in
$_GET[]

37. For deleting we need form and hidden input to POST the id

38. ternary operators return a value :
  $score = 50;
  $val = $score > 40 ? 'high score' : 'low score :(';
  echo $val;

39. superglobals are the associative arrays that can be accessed any 
  where:
    $_POST[] , $_GET[] , $_SERVER[]
    example of server super global:
      a. $_SERVER['SERVER_NAME'] : bring back the server name
      B. $_SERVER['REQUEST_METHOD] : GET or POST
      c. $_SERVER['SCRIPT_FILENAME'] : complete file name
      d. $_SERVER['PHP_SELF'] : endpoint of filename
      e. $_SERVER['QUERY_STRING] : everything after ? in query string of url
40. sessions are another super global:
   // sessions, store data on server, and keep it between requests,
    sessions last until we close the browser
    
    to use session :
      a. first we use session_start() on every page that we want to use
          sessions
      b. then store the session, for example: $_SESSIOM['name'] = 'alireza'

      c. Then we can use it in any page of the app

41. we can use unset($_SESSION['name']) to unset a variable
    we can use session_unset(); to unset all the session variables

[ATTENTION]
42. We can use Null coalesc operator to make backup value for 
  a variable:
                $name = $_SESSION['name'] ?? 'Guest';

43. To create cookie we use setcookie() function and we use it by $_COOKIE['']

44. There are some functions that works with files:

    a. file_exist($file);
    b. readfile($file);
    c. copy($file, 'newFile.txt'); : if there is no newFile it will create it
    d. realpath($file) : give the path of the file
    e. filesize($file) : give the byte of the file
    f. rename($file, 'newName');
    g. mkdir(ghasem) : makes a new directory

45. There are a better way to work with files:
    a.open the file with $handle = fopen($file, 'r,w,a')
          check the links for flag

    b. then use fread($handle) or fwrite($handel, '') for 
        reading or writing, check flag list for the position
        of the POINTER

    c. use fgets($handle) for reading a single line

    d. use fgetc($handle) for reading a single character

[ATTENTION] : always pay attention to the position of the POINTER

46. object oriented in php is much like C++ :

    class User {
      private $name;
      private $email;

      public function _construct($name, $email){
        $this->name = $name;
        $this->email = $email;
      }
      public function login(){
        echo $this->name . ' logged in';
      }
      public function getName(){
        return $this->name;
      }
      public function setName($name){
        if(is_string($name)){
          
        }
      }
    }