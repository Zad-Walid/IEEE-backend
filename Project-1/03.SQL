/*https://www.hackerrank.com/challenges/symmetric-pairs/problem?isFullScreen=true*/

/*
    Enter your query here and follow these instructions:
    1. Please append a semicolon ";" at the end of the query and enter your query in a single line to avoid error.
    2. The AS keyword causes errors, so follow this convention: "Select t.Field From table1 t" instead of "select t.Field From table1 AS t"
    3. Type your code immediately after comment. Don't leave any blank line.
*/
Select X, Y From Functions 
Where X = Y Group By X, Y
Having Count(*) > 1
Union
SELECT A.x, A.y FROM Functions A, Functions B
WHERE A.x = B.y AND A.y = B.x AND A.x < A.y
Order By 1;