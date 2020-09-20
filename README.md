# Cricle Words
### Requerimientos
```sh
- Docker
- git
```

### Configuración

```sh
$ git clone https://github.com/sergioc6/circle-words.git
$ cd circle-words
```

Crear el container
```sh
$ docker build -t circle-words .
```

Levantar el container que ejecuta el script
```sh
$ docker run -it circle-words
```