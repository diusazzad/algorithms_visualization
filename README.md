algorithms_visualization
Algorithm Visualization

Idea
The idea behind this project is to provide an easy and interactive way to learn how algorithms work, with a focus on real-life applications and educational features. It is designed for individuals who are interested in learning and understanding algorithms in a practical and engaging manner.

Features Implemented
Landing Page

Login and Registration Page
Multiple Role-Based Users
Super Admin
Dashboard
CRUD Operations
Ability to assign roles, email, name, and password
Admin
Editor
User
Dashboard
Search-Based Algorithm
This is an ongoing project with regular updates and new features being added. Feel free to fork the repository and explore the implemented features.

Upcoming Features
Install Firewall
Multiple Database Support
Cookie System (already implemented)
Multiple Authentication Systems (e.g., token, session) for different user roles (already implemented)
Installation Guide
Please follow these steps to set up the project on your local machine:

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

bash
Copy code
composer install
Run the database migrations:

bash
Copy code
php artisan migrate
Optionally, you can seed the database with sample data (if provided by the project):

bash
Copy code
php artisan db:seed
Generate the application's asset files:

bash
Copy code
npm install
npm run dev
Finally, start the Laravel development server:

bash
Copy code
php artisan serve
You should see a message like "Laravel development server started" along with the server's URL. Open that URL in your web browser to access the project.

Feel free to explore and learn from the project.
