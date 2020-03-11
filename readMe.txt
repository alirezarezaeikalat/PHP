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
    e. we can merge two array together : $people3 = array_merge($people , $people2);

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
      ['title' => 'mario kart', 'page' => 32, 'content' => 'lorem']
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
  get method

20. for protecting from XSS attacks always use htmlspecialchars() to make
  the special characters to html entities