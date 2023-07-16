# algorithms_visualization
 Algorithm Visualization

Idea 
    * The idea is to learn easy and simply way how algorithm works, how real life applicaiton done and many more for those who are trying to lean something and get out from the matrix.

    
Feature We Implemented, 
----Landing Page
---- Login and Registration Page
----- Multiple Role Based  Users
----- Super Admin
--------- Dashboard
--------- CRUD Operation
----------Super Admin can assign role, email,name and password
------Admin
------Editor
------- User
------------ Dashboard
-------------Search Based Algorithm 

It's a regulalar based ongoing project . Feel free to fork and learn the feature.

UpComming-
    * Install Firewall
    * Multiple Database
    * Cookie System
    * Multiple Authentication system such as token,session etc for role user

 Please follow these steps:

Clone the GitHub repository to your local machine using the following command:
bash
Copy code
git clone https://github.com/diusazzad/algorithms_visualization.git
Make sure you have PHP and Composer installed on your machine. You can check if they are installed by running the following commands:
bash
Copy code
php --version
composer --version
Navigate to the project's directory:
bash
Copy code
cd algorithms_visualization
Copy the .env.example file and rename it to .env:
bash
Copy code
cp .env.example .env
Generate a new application key:
bash
Copy code
php artisan key:generate
Update the .env file with your database configuration. You may need to create an empty database before proceeding.

Install the project dependencies using Composer:
----------composer install
Run the database migrations:
----------php artisan migrate
Optionally, you can seed the database with sample data (if provided by the project):
---------php artisan db:seed
Generate the application's asset files:
---------npm install
---------npm run dev

Finally, start the Laravel development server:
php artisan serve
You should see a message like "Laravel development server started" along with the server's URL. Open that URL in your web browser to access the project.

