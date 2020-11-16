--1.How many movies did each studio produce?
SELECT s_name, COUNT(m_movieKey)
FROM studio, movie
WHERE
    s_studioKey = m_studio
    GROUP BY s_name;


--2.Which actors have starred in more than one movie?
SELECT a_name
FROM actor, movie
WHERE
    a_movieKey = m_movieKey
    GROUP BY a_name
    HAVING COUNT(DISTINCT m_movieKey) >= 2;


--3.How many movies have each director directed?
SELECT d_name, COUNT(m_movieKey)
FROM director, movie
WHERE
    m_director = d_directorKey
    GROUP BY  d_name;


--4.List all the number of movies released for each year.
SELECT m_year, COUNT(DISTINCT m_movieKey)
FROM movie
GROUP BY m_year;


--5.How many movies have a Rotten Tomatoes score below 80%?
SELECT COUNT(m_movieKey)
FROM movie
WHERE
    m_rating < 80;

--6.How many movies have a Rotten Tomatoes score of 80% or above?
SELECT COUNT(m_movieKey)
FROM movie
WHERE
    m_rating >= 80;


--7.List the years movies were released?
SELECT m_year
FROM movie
GROUP BY m_year;


--8.How many different actors were associated for each studio?
SELECT s_name, COUNT(a_actorKey)
FROM studio, actor, movie
WHERE
    s_studiokey = m_studio AND
    m_movieKey = a_movieKey
    GROUP BY s_name;


--9.How many studios have the same location? List the location and the count.
SELECT s_location, COUNT(DISTINCT s_studioKey)
FROM studio
GROUP BY s_location;


--10. What is the birthyear of the director of Black Panther?
SELECT d_birthdate
FROM director, movie
WHERE m_name = 'Black Panther' AND
m_directorkey = d_directorkey;


--11.Delete any suggestions that are already in the movie table
DELETE FROM suggestionBox
WHERE s_name = m_name;


--12. How many studios are in Hollywood CA?
SELECT COUNT(s_name)
FROM studio
WHERE s_location = 'Hollywood, CA';


--13. How many users have pending suggestions?
SELECT COUNT(u_name)
FROM users
WHERE u_suggestions != NULL;


--14.How many coming of age movies are there?
SELECT COUNT(m_name)
FROM movie
WHERE m_genre = 'Coming of age';


--15.Who is both an actor and director?
select d_name
from director, actor
where
d_name = a_name;


--16.Which movies were released during the 90s?
SELECT m_name
FROM movie
WHERE m_date >= 1990 AND
m_date < 2000;


--17. Delete all the suggestions but not the suggestion box
DELETE FROM suggestionBox;


--18. Delete Robert Downey Jr from the actors table
DELETE FROM actor 
WHERE a_Name='Robert Downey Jr.';


--19. Add actor Jon Heder to the actors table
INSERT INTO actor(a_actorkey, a_moviekey, a_name, a_birthdate)
VALUES ('87', '32', 'Jon Heder', '1977');


--20. Update John Krasinski's birthdate to 1960
UPDATE director
SET d_birthdate = 1960
WHERE d_directorKey = 42;


--21. What movie in the category of black movies, was produced in Burbank CA, and was directed by Ryan Coogler?
SELECT m_name
FROM movie,
director,
studio
WHERE m_directorkey = d_directorkey AND
m_studiokey = s_studiokey AND
s_location = 'Burbank, CA' AND
d_name = "Ryan Coogler"
;


--22. What Thriller movie had a director born in 1941 and filmed by Netflix?
SELECT m_name
FROM movie,
director,
studio
WHERE m_directorkey = d_directorkey AND
m_studiokey = s_studiokey AND
s_name = 'Netflix' AND
d_birthdate = '1941'
;

--23. Harry Potter and the Sorcerer's Stone was directed by who, for which Studio in Burbank, CA?
--give the director and studio
SELECT d_name, s_name
FROM movie,
director,
studio
WHERE m_directorkey = d_directorkey AND
m_studiokey = s_studiokey AND 
s_location = 'Burbank, CA'
;

--25. Which actor born in 1946, starred in the movie X-men? What year was the movie's director born?
SELECT a_name, d_birthdate
FROM movie,
director,
actor
WHERE m_directorkey = d_directorkey AND
m_moviekey = a_moviekey AND
s_name = 'Netflix' AND
a_birthdate = '1946' AND
m_name = "X-men"
;

--26. Which actor starred in a movie by Gulliermo del Toro was born in 1957?
SELECT a_name
FROM actor,
movie,
director
WHERE m_directorkey = d_directorkey AND
m_moviekey = a_moviekey AND
d_name = 'Gullermo del Toro' AND
a_birthdate = '1957'
;

--27. How many suggestions are there in the suggestion box that are still pending?
SELECT COUNT(sb_key)
FROM suggestionBox
WHERE sb_acceptance = 'pending'
;

--28. How many users are there?
SELECT COUNT(u_name)
FROM users
;
