-- 01 List des animaux classés par ordre alphabétique
SELECT *
FROM animal
ORDER BY nomA ASC;

-- 02 Liste des chiens ('CHIEN') classés par ordre alphabétique
SELECT *
FROM animal
WHERE espA = 'CHIEN'
ORDER BY nomA ASC;

-- 03 Liste des chiens ('CHIEN') belges ('BE') classés par ordre alphabétique
SELECT *
FROM animal
WHERE espA = 'CHIEN' AND nationA = 'BE'
ORDER BY nomA ASC;

-- 04 Liste des animaux sans nationnalité: nom, description et espèce
SELECT 
    nomA AS `nom`,
    descA AS `description`,
    espA AS `espèce`,
    nationA AS `nation`
FROM animal
WHERE nationA IS NULL;

-- 05 Liste des animaux dont le nom contient au moins un 'A': nom, description, espèce
SELECT
    nomA AS `nom`,
    descA AS `description`,
    espA AS `espece`
FROM animal
WHERE nomA LIKE '%A%';

-- 05b Liste des animaux dont le nom contient un seul 'A': nom, description, espèce
SELECT
    nomA AS `nom`,
    descA AS `description`,
    espA AS `espece`
FROM animal
WHERE nomA LIKE '%A%' AND nomA NOT LIKE '%A%A%';

-- 06 Liste des animaux: nom en majuscule, nombre de lettres du nom
SELECT
    UPPER(nomA) AS `nom`,
    CHAR_LENGTH(nomA) AS `nbre de lettres`
FROM animal;

-- 07 Liste des animaux dont le nom commence par une voyelle: nom, description, espèce
SELECT
    nomA AS `nom`,
    descA AS `description`,
    espA AS `espèce`
FROM animal
WHERE nomA RLIKE '^[aeiouy].*'; 

-- 08 Liste des animaux: 1ère letttre du nom en majuscule
SELECT CONCAT( UPPER( LEFT(nomA,1) ) , SUBSTRING(nomA,2))
FROM animal;

-- 11 Le nombre d'animaux par espèce: code espèce, nombre d'animaux
SELECT
    espA AS `espèce`,
    COUNT(idA) AS `nbre d'animaux`
FROM animal
GROUP BY espA;

-- 12 Le nombre d'espèce différentes par pays: code pays, nombre d'espèces
SELECT
    nationA AS `code pays`,
    COUNT(espA) AS `nbre d'espèces`
FROM animal
GROUP BY nationA;

-- 13 Les espèces avec un seul représentant
SELECT
    espA AS `espèce`,
    COUNT(idA) as `nbre d'animaux`
FROM animal
GROUP BY espA
HAVING COUNT(idA) = 1;



