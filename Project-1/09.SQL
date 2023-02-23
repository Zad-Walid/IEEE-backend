/*https://www.hackerrank.com/challenges/full-score/problem?isFullScreen=true*/
/*
Enter your query here.
*/
SELECT H.hacker_id, H.name FROM Submissions AS S 
JOIN Hackers AS H ON S.hacker_id = H.hacker_id 
JOIN Challenges AS C ON S.challenge_id = C.challenge_id 
JOIN Difficulty AS D ON C.difficulty_level = D.difficulty_level 
WHERE S.score = D.score 
GROUP BY H.hacker_id, H.name 
HAVING COUNT(S.score) > 1 
ORDER BY COUNT(*) DESC, H.hacker_id;