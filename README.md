# Cube Summation 
## Manuel F. Stroh S.

Implementation of  exercise using Laravel Framework 5.2
[Hacker's Rank Cube Summation](https://www.hackerrank.com/contests/101jan14/challenges/cube-summation "Hacker's Rank Cube Summation") challenge.


# Step 3
## Single Responsability Principle
1. "A class should have one, and only one reason to change; an object should only have a reason to change; a class should have only one job". Basically, a class should have a single responsibility. When it has too many responsibilities, the best practice to follow is to extract from it those responsibilities and delegate them to other classes. As an example, if in a specific project has a Reporting class, it should only have the responsibility to actually generate a report. Additional responsibilities such as validating an authenticated user, querying a database, formatting output should belong to other classes, otherwise the Reporting class will have many consumers. For example, if the persistence layer would of change, we would have to modify the Reporting class. If the formatting output is going to change as well, we would have to change this class as well, and even others if applies.