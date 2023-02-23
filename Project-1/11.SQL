/*https://www.hackerrank.com/challenges/contest-leaderboard/problem?isFullScreen=true*/

/*
Enter your query here.
*/
SELECT a.hacker_id,h.name,SUM(a.score) as total_score from 
(SELECT hacker_id,challenge_id,MAX(score) as score FROM Submissions GROUP BY hacker_id,challenge_id) a 
JOIN Hackers h ON h.hacker_id = a.hacker_id
GROUP BY a.hacker_id,h.name
HAVING SUM(score)>0
ORDER BY SUM(score) DESC, hacker_id