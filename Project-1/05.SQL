/*https://www.hackerrank.com/challenges/the-report/problem?isFullScreen=true*/

/*
Enter your query here.
*/
SELECT
    CASE WHEN G.Grade >= 8 THEN S.name
    ELSE NULL END AS Name,G.Grade,S.Marks FROM Students AS S
JOIN Grades AS G
ON S.Marks >= G.Min_Mark AND S.Marks <= G.Max_Mark
ORDER BY Grade DESC, name, S.marks