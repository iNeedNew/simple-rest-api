### Simple REST API implementation

#### Task

There is a filtering on a job search site that consists of locations in a tree structure, i.e. Europe/UK/London to
output the number of vacancies that belong to each location in JSON format.

### Deploy

#### The following ports will be used on the host machine

* 2000 - Nginx

~~~
git clone https://github.com/iNeedNew/simple-rest-api.git
~~~

~~~
cd simple-rest-api
~~~

~~~
docker-compose build
~~~

~~~
docker-compose up -d
~~~

~~~
docker exec -it app composer update
~~~

### Resources

Return tree structure location and calculate count use vacancies

~~~
GET  /api/v1/locations/
~~~

### Development instruction

* To add a new router go to /public/index.php 
* To add a new controller, navigate to /src/App/Controller/Api/
