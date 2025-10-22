# AVISO
Por el momento no funciona la base de datos (por la velocidad de descarga del servidor apache en la facultad), despues se va a configurar para que funcione localmente por medio de Docker.

# Contenedor BD y servidor web
Por medio de la ejecución del siguiente comando en el directorio del *docker-compose.yml* deberia levantar el contenedor con el servidor web y la base de datos para el deasrrollo local:
```bash
docker compose up -d
```
Despues se debería ejecutar el script sql que se encuentra en el repositorio dentro de **src/** para crear la tabla en cuestión.


# Extra
Tiene un render.yml para el futuro despliegue como WebApp en Render. 
