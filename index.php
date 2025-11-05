<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Essential How</title><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: "Open Sans", sans-serif; font-optical-sizing: auto; font-style: normal; padding-top: 6px; /* Adjust for fixed navbar */}
        .container { margin-bottom: 10px; } 
        .jumbotron { padding: 2rem 1rem; margin-bottom: 0rem; background-color: #e9ecef; border-radius: .3rem; }
        .section-spacing { padding-top: 10px; }
        h2, h2 { font-size: 1.6rem; }
        pre { background-color: #f8f9fa; padding: 15px; border-radius: 5px; overflow-x: auto; }
        footer .container { margin-bottom: 0px; padding-bottom: 10px; font-size: 0.8rem; } 
    </style>
</head>
<body>
    <div class="container">

        <section id="php-essential" class="jumbotron text-center">
            <h1 class="display-5">PHP Essential How</h1>
        </section>

        <section id="github" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h2>GitHub repository</h2>
                </div>
                <div class="card-body">
                    <p class="lead"><a href="https://github.com/mazinhoweb/php-essential-how" target="_blank">https://github.com/mazinhoweb/php-essential-how</a></p>
                </div>
            </div>
        </section>

        <section id="php-essential-how" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h2>PHP Essential How to create build Amazing websites with PHP</h2>
                </div>
                <div class="card-body">
                    <p>Learn the foundations and features of why PHP code is so popular through this series of clear easy to follow lessons<br>
                        <pre><a href="https://www.udemy.com/course/php-essential-how-to-create-build-amazing-websites-with-php" target="_blank">https://www.udemy.com/course/php-essential-how-to-create-build-amazing-websites-with-php</a></pre>
                    </p>
                </div>
            </div>
        </section>

        <section id="description" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h3>Description</h3>
                </div>
                <div class="card-body">
                    <p>This course is designed to be easy to follow along, its encouraged to practice the code being presented through out the course. Resources, source code, and everything you need to learn PHP is provided. Start with simple PHP functionality as we explain how it integrates with HTML.</p>
                </div>
            </div>
        </section>

        <section id="sections" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h4>Sections</h4>
                </div>
                <div class="card-body">
                    <p>Section 1: <a href="http://localhost/section1" target="_blank">PHP Essential learn the foundations of coding using PHP</a></p>
                    <p>Section 2: <a href="http://localhost/section2" target="_blank">PHP coding syntax and lessons</a></p>
                </div>
            </div>
        </section>

        <section id="instructor" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h4>Instructor</h4>
                </div>
                <div class="card-body">
                    <p>Laurence Svekis - Instructor, GDE, Application Developer</p>
                </div>
            </div>
        </section>

        <section id="docker-php" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h5>Docker - PHP 8.4 Apache</h5>
                </div>
                <div class="card-body">
                    <p>Apache without a Dockerfile<br>  
                        <pre>docker run -d -p 80:80 --name apache-php84-app -v "$PWD":/var/www/html php:8.4-apache</pre>
                    </p>
                </div>
            </div>
        </section>

        <section id="docker-container" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h5>Docker Container exec</h5>
                </div>
                <div class="card-body">
                    <p>docker exec -it apache-php84-app bash</p>
                </div>
            </div>
        </section>

        <section id="docker-url" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h5>URL Address</h5>
                </div>
                <div class="card-body">
                    <p><a href="http://localhost/" target="_blank">http://localhost/</a></p>
                </div>
            </div>
        </section>

        <section id="docker-container-commands" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h5>Docker Container Commands</h5>
                </div>
                <div class="card-body">
                    <p>docker ps; docker ps -a;<br> 
                        docker stop apache-php84-app;<br>
                        docker start apache-php84-app;<br>
                        docker stop $(docker ps -aq);<br>
                        docker rm $(docker ps -aq);<br>
                        docker ps; docker ps -a;</p>
                </div>
            </div>
        </section>

        <section id="inside-docker" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h5>Inside The MySQL Container</h5>
                </div>
                <div class="card-body">
                    <p>docker exec -it apache-php84-app bash</p>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">PHP Essential How: Edmar Inocencio - Mazinho Developer - Mazinho Web.</span>
        </div>
    </footer>
</body>
</html>