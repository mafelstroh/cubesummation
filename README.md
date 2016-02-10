# Cube Summation 
## Manuel F. Stroh S.

# Step 1
## Implementation of  exercise using Laravel Framework 5.2
[Hacker's Rank Cube Summation](https://www.hackerrank.com/contests/101jan14/challenges/cube-summation "Hacker's Rank Cube Summation") challenge.

## Application layers:

1. View / Client Side

* Twitter Bootstrap
* jQuery
* Laravel's Blade Template Engine

2. Business Logic

* cubesummation\Http\Controllers\NavController.php  -> Responsible for handling navigation
* cubesummation\Http\Controllers\CubeController.php -> Responsible for the operation related to the Matrix (Update/Query)

3. Service Providers

* Illuminate\Html\HtmlServiceProvider.php -> Used for HTML form building (using a facade provided called FormFacade.php)
* phpunit\phpunit                         -> Used for unit testing

4. Tools

* Laravel's Elixir (Gulp) -> Responsible for compiling and mixing assets: SASS, JS


# Step 2
## Code Refactoring
1. Bad practices evidenced in the provided code: 

![Ugly code :3](https://sc-cdn.scaleengine.net/i/f2b309c028ad355784ff5ec0b942d8451.png)

* The code is not following a coding standard. In this specific case, for PHP, should be using PSR standard. 

* The code should only have one output endpoint. There are many 'return' declarations among the code which is a bad practice. 

* Many responsibilities delegated to only one functional piece of code. The method "post_confirm" should not be in charge of formatting a response nor updating the persistance. This can be done in separate methods or even different objects. 

* Code is not easy to test. Both Driver and Service, can be injected as dependencies and as parameters in the method itself, instead of the use of Laravel Facades for this specific case. 

* Lack of use of constants, and use of magic strings. This is a bad practice because it is difficult first to understand which are the statuses that are being validated. 

* A Factory Pattern can be implemented in order to, for this case, send the message to the proper platform, in this case, iPhone and Android. If a new device would come out, with a factory pattern would be much simpler to create a class for its specific responsability. 

* Lack of usefull comments.

# Step 3
## Single Responsability Principle
1. "A class should have one, and only one reason to change; an object should only have a reason to change; a class should have only one job". Basically, a class should have a single responsibility. When it has too many responsibilities, the best practice to follow is to extract from it those responsibilities and delegate them to other classes. As an example, if in a specific project has a Reporting class, it should only have the responsibility to actually generate a report. Additional responsibilities such as validating an authenticated user, querying a database, formatting output should belong to other classes, otherwise the Reporting class will have many consumers. For example, if the persistence layer would of change, we would have to modify the Reporting class. If the formatting output is going to change as well, we would have to change this class as well, and even others if applies.

## Clean Code
2. There are many principles that in my opinion a "Clean Code" must have. 

* Functional units should follow SPR principles in order to avoid difficult code changes when needed. Therefore, an object should be only responsible for one aspect of a system's requirements.

* Documentation is very important to make code cleaner. A developer should never write code for himself; instead, it should be readable, properly indented depending on the language that is being used thus making a functional unit or piece of code easily extendable by other developers on the team.

* Should follow a standard coding standard such as PSR (for PHP, for example).

* Clean code is easy to test, so it should be written in a way that a specific functional unit can be tested.

* Divide and conquer. Simple, short code. 