--How many movies did each studio produce?
SELECT s_name, COUNT(m_movieKey)
FROM studio, movie
WHERE
    s_studioKey = m_studio
    GROUP BY s_name


--Which actors have starred in more than one movie?
SELECT a_name
FROM actor, movie
WHERE
    a_movieKey = m_movieKey
    GROUP BY a_name
    HAVING COUNT(DISTINCT m_movieKey) >= 2


--How many movies have each director directed?
SELECT d_name, COUNT(m_movieKey)
FROM director, movie
WHERE
    m_director = d_directorKey
    GROUP BY  d_name


--List all the number of movies released for each year.
SELECT m_year, COUNT(DISTINCT m_movieKey)
FROM movie
GROUP BY m_year


--How many movies have a Rotten Tomatoes score below 80%?
SELECT COUNT(m_movieKey)
FROM movie
WHERE
    m_rating < 80

--How many movies have a Rotten Tomatoes score of 80% or above?
SELECT COUNT(m_movieKey)
FROM movie
WHERE
    m_rating >= 80


--List the years movies were released?
SELECT m_year
FROM movie
GROUP BY m_year


--How many different actors were associated for each studio?
SELECT s_name, COUNT(a_actorKey)
FROM studio, actor, movie
WHERE
    s_studiokey = m_studio AND
    m_movieKey = a_movieKey
    GROUP BY s_name

--How many studios have the same location? List the location and the count.

SELECT s_location, COUNT(DISTINCT s_studioKey)
FROM studio
GROUP BY s_location