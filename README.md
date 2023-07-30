## INITIALIZATION
- 1-CLONE THE PROJECT.

- 2-ENTER THE PROJECT FOLDER.

- 3-RENAME THE FILE .ENV.EXAMPLE TO .ENV

- 4-UPLOAD THE PROJECT CONTAINER. : `docker-compose up -d`

- 5-ENTER INSIDE THE CONTAINER APP: `docker commpose exec app bash`

- 6-DOWNLOAD THE PROJECT DEPENDENCIES: `composer install`

- 7-GENERATE THE PROJECT KEY: `php artisan key:generate`

- 8-RUN THE MIGRATIONS AND SEED OF THE PROJECT: `php artisan migrate`

- 9-INSTALL PASSPORT: `php artisan passport:install`

- 10-CONFIGURE A VIRTUAL HOST(OPTIONAL, HELPS IN THE PROCESS OF TESTING THE API): `http://api.com`



=== DOCKER ===
Adicionar o usuário atual ao grupo "docker":

    Abra um terminal e execute o seguinte comando para adicionar seu usuário ao grupo "docker" (você precisará digitar sua senha de administrador/sudo):

bash

`sudo usermod -aG docker $USER`

Depois disso, faça logout e login novamente para que as alterações entrem em vigor.

Executar comandos do Docker usando "sudo":

    Se você não quiser adicionar seu usuário ao grupo "docker", pode continuar executando os comandos do Docker com "sudo":

css

`sudo docker rmi $(sudo docker images -a -q)`


Com base na saída que você forneceu, assumindo que o arquivo Dockerfile está localizado na pasta atual (que parece ser o caso), você pode executar o comando docker build da seguinte forma:

`docker build -t api-app` .


Para limpar essas imagens sem tag, você pode executar o seguinte comando:

bash

`sudo docker image prune`

Esse comando removerá todas as imagens "dangling" e sem uso, liberando espaço em disco.

Se você quiser limpar todas as imagens (incluindo as com tags) que não estão sendo usadas por nenhum contêiner, você pode executar:

bash

`sudo docker image prune -a`


Para todas as instâncias
`docker stop $(docker ps -a -q)`
