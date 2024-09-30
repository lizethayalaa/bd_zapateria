# sistema para una zapateria

## modelo entidad-relacion 

![modelo Entidad-relacion](zapateria.png "Modelo Entidad-Relacion")

## modelo fisico de la BD

![modelo fisico](modelo_fisico.png "modelo fisico de la BD")

## consulta a la BD 

1. Mostrar la lista de todos datos de los fabricantes

`SELECT * FROM Fabricante;`

2. Mostrar la lista de nombres de los fabricantes 

`SELECT nombre_fabricante FROM fabricante`

![consulta 2](consulta2.png "consulta 2")

3. Mostrar los nombres de los productos

![Consulta 3](img/consulta_3.png "Consulta 3")

4. Obtener los nombres y los precios de los productos de la tienda.

`SELECT nombre_articulo AS Nombre, precio_articulo AS Precio FROM Articulo;`

![Consulta 4](img/consulta_4.png "Consulta 4")

5. Obtener los nombres de los articulos cuyo precio sea superior 50000

`SELECT nombre_articulo FROM Articulo WHERE precio_articulo > 50000`

![Consulta 5](img/consulta_5.png "Consulta 5")

6. Obtener el nombre de los artículos cuyo precio esté entre 5000 y 40000 (ambos incluidos)

`SELECT nombre_articulo FROM Articulo WHERE precio Articulo WHERE precio_articulo >= 5000 AND precio_articulo <= 40000;

### Forma 2

`SELECT nombre_articulo FROM Articulo WHERE precio_articulo BETWEEN 5000 AND 40000;`

¡[Consulta 6](img/consulta_6.png "Consulta 6")

