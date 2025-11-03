# PHP Essential How 
GitHub repository: https://github.com/mazinhoweb/php-essential-how    


## PHP Essential How to create build Amazing websites with PHP 
Learn the foundations and features of why PHP code is so popular through this series of clear easy to follow lessons    
https://www.udemy.com/course/php-essential-how-to-create-build-amazing-websites-with-php   


### Description 
This course is designed to be easy to follow along, its encouraged to practice the code being presented through out the course. Resources, source code, and everything you need to learn PHP is provided. Start with simple PHP functionality as we explain how it integrates with HTML.   


#### Sections 
Section 1 - PHP Essential learn the foundations of coding using PHP    
Section 2 - PHP coding syntax and lessons   


##### Instructor 
Laurence Svekis - Instructor, GDE, Application Developer   


###### Docker 
Apache without a Dockerfile    
docker run -d -p 80:80 --name apache-php84-app -v "$PWD":/var/www/html php:8.4-apache   


###### Docker Container exec 
docker exec -it apache-php84-app bash    


###### Browser URL Address 
http://localhost/    


###### Docker Container Commands 
docker ps; docker ps -a;   
docker stop apache-php84-app;   
docker start apache-php84-app;   
docker stop $(docker ps -aq); docker rm $(docker ps -aq);    
docker ps; docker ps -a;   


###### Inside The MySQL Container 
docker exec -it apache-php-app bash   
