
/*https://www.hackerrank.com/challenges/weather-observation-station-2/problem?isFullScreen=true*/

/*
    Enter your query here and follow these instructions:
    1. Please append a semicolon ";" at the end of the query and enter your query in a single line to avoid error.
    2. The AS keyword causes errors, so follow this convention: "Select t.Field From table1 t" instead of "select t.Field From table1 AS t"
    3. Type your code immediately after comment. Don't leave any blank line.
*/
SELECT CAST(ROUND(SUM(LAT_N),2) AS DECIMAL (10,2)), CAST(ROUND(SUM(LONG_W),2) AS DECIMAL (10,2)) FROM STATION;