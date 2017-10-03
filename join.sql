/*Notice how this joins every record to every other record*/
SELECT c.firstName, c.lastName, a.state, 
FROM customers c
WHERE a.state='CA';
order by lastName;
