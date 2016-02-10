# Cube Summation 
## Manuel F. Stroh S.

Implementation of  exercise using Laravel Framework 5.2
[Hacker's Rank Cube Summation](https://www.hackerrank.com/contests/101jan14/challenges/cube-summation "Hacker's Rank Cube Summation") challenge.


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