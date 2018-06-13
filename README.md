# Having Problem Running in to php v7 (mysql_* function not found)

## Error 
     Call to undefined function mysql_connect()” after upgrade to php-7
## Reason 
  Mysql Extention was Deprecated in PHP 5.5.0 And Removed in PHP 7.0.0. 
## Solution
  Include `mysql_support_lib.php` File Where you call `mysql_connect` then it will work in all version of the php.
## How it Works
  I have created the duplicate function that will work instade of mysql (behind the scenes it uses mysqli) and it also work in older versions.
## Other Solutions
  There are some great solution in the stackoverflow. [click here for other solution](https://stackoverflow.com/questions/12859942/why-shouldnt-i-use-mysql-functions-in-php)  
## Why use this solution
  in this solution you only have to include one file so you have a project already working on mysql and having truble in PHP 7 then this solution will work for you.
## Contribution
  I have not converted each and every function of mysql so feel free to contribute more functions and make a pull request 
## Note
  As Said in Contribution i have not converted all functions if you having truble in that make in issue in this repo.
