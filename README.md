1.1. instruction for running the app 

    a. download zip file on git hub, rename folder to laravel-docker-todo
    b. using visual studio code or any same environment, open folder laravel-docker-todo     
    c. open terminal and run 
       - docker-compose build 
       - docker-compose up
       - docker exec laravel-doc-apps bash -c "php artisan migrate"

1.2. Instruction for testing the app and interface documentation

     a. run url http://localhost:8000/ 
     b. click register or log in to direct go to login page
        ![Alt text](image.png)
     c. click login to direct go to home page
        ![Alt text](image-1.png)
     d. click To Do Process button to direct go todo pages
        ![Alt text](image-2.png)
     e. click Create New Todo button  to create a new todo info
        click Edit button to edit todo info and completed todo process
        click view button to view todo info
        click Delete button to remove a todo info
        ![Alt text](image-3.png)
          
1.3. Instruction for building the app

     a. this apps using php version 8.2.4, laravel framework version 8.83.27 and mysql database version 8.2
     b. .env file is a convenient way to store environment-specific variables, such as API keys and database passwords, in a simple text file
     c. routes/web file is where you can define the routes for your application that respond to HTTP requests.
     d. app/http/controllers/ToDoControllers might handle all incoming requests related to users, including showing, creating, updating, and deleting todo process. By default, controllers are stored in the app/Http/Controllers directory
     e. resources/views contain the html code required by your application, and it is a method in Laravel that separates the controller logic and domain logic from the presentation logic
