<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Essential How - Section 1</title><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                    <h2>Section 1</h2>
                </div>
                <div class="card-body">
                    <p class="lead">PHP Essential learn the foundations of coding using PHP</p>
                    <p class="lead"><pre>GitHub repository: <a href="https://github.com/mazinhoweb/php-essential-how/tree/main/section1 " target="_blank">https://github.com/mazinhoweb/php-essential-how/tree/main/section1 </a></pre></p>
                </div>
            </div>
        </section>

        <section id="description" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h3>Description</h3>
                </div>
                <div class="card-body">
                    <p>PHP Course Introduction 02:49<br>
                        PHP Resources File 02:50<br>
                        Web development Resource Guide 15 pages<br>
                        PHP setup local host for server side scripting 06:59<br>
                        PHP setup config install 05:15</p>
                </div>
            </div>
        </section>

        <section id="docker-url" class="section-spacing">
            <div class="card">
                <div class="card-header">
                    <h5>URL Address</h5>
                </div>
                <div class="card-body">
                    <p><a href="http://localhost/section1" target="_blank">http://localhost/section1</a></p>
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