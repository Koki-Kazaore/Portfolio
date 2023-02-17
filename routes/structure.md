## what is routes directory

***route definition***

This directory defines the route to be taken when the URL "https://0123.com/xxx" is accessed by a web service, and defines a list of processes to be performed.
There are four files: "web.php", "api.php", "console.php", and "channels.php". For web services, the route is basically defined in "web.php"; if you want to create an API, define it  in "api.php".