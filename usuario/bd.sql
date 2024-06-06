create DATABASE Alexis;

CREATE TABLE usuarios (
  id INT PRIMARY KEY IDENTITY(1,1),
  nombre VARCHAR(100),
  password VARCHAR(100),
  usuario VARCHAR(100),
  rol VARCHAR(100)
);

SELECT * FROM usuarios;