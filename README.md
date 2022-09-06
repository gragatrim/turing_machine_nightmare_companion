# Turing Machine Nightmare Helper
This helps you parse the avaible options for a given nightmare problem set

To run it locally you just need to do the following
1. Make sure you have docker installed
2. Clone this repo
3. From the repository run the following commands
    1. docker build -t turing_machine_nightmare .
    2. docker run -p 8080:8080 -v .:/var/www/html turing_machine_nightmare
4. Open up a browser and navigate to http://localhost:8080/index.php
