/*https://www.hackerrank.com/challenges/weather-observation-station-11/problem?isFullScreen=true*/


/*
    Enter your query here and follow these instructions:
    1. Please append a semicolon ";" at the end of the query and enter your query in a single line to avoid error.
    2. The AS keyword causes errors, so follow this convention: "Select t.Field From table1 t" instead of "select t.Field From table1 AS t"
    3. Type your code immediately after comment. Don't leave any blank line.
*/SELECT DISTINCT CITY FROM STATION WHERE 
LEFT(CITY,1) NOT IN ('A','E','I','O','U') OR RIGHT(CITY,1) NOT IN ('a','e','i','o','u');