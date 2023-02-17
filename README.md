# Election Management System
## CS50x Final Project


![alt text](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg "Laravel")
### Introduction
Conducting Student/Pupil Government Election is a bit complicated especially when done usign the traditional ballot and paper method. Most school siun the Philippines still utilize the traditional method when conducting elections. To tackle this problem I created an election management system suitable for this stiation.This election management system is compliant to the specifications of DepEd Philippines.

##### Technologies utilized:

- PHP 8
  - We utilized PHP as the back-end since it allows web developers to create dynamic content and work alongside the database as well. It is also known for its simplicity, speed, and flexibility, which makes it stand out from the crowd of web programming languages out there. Some websites that uses PHP are: Facebook, Wikipedia, Mailchimp, Yahoo, Canva, and Slack. Examples of Content Management Systems that use PHP includes WordPress, Drupal, Magento, Joomla, and many other popular platforms.
- Laravel 9
  - We chose Laravel as a web framework bacause it follows - Model, View, and Controller-based architectural pattern and it has an eloquent good-looking syntax which makes it object-oriented. Laravel is a free and open-source PHP web framework, founded by Taylor Otwell and intended for the development of web apps following the model–view–controller architectural pattern and it is based on Symfony-a free and open-source PHP web application framework and a set of reusable PHP component libraries.
- Bootstrap 4
  - Bootstrap is the world's most popular framework for creating responsive, mobile-first app on the web. It saved us time from writing tons of CSS code and gives us time to spend on designing web pages. It is free and open source. 
- MySQLi
  - MySQLi extension (MySQL improved) is a relational database driver used in the PHP scripting language to provide an interface with MySQL databases. The advantages of using MySQLi compared to MySQL is that MySQLi supports both procedural interfaces and object oriented interfaces meanwhile MySQL supports only procedural interfaces. MySQLi supports stored procedure However MySQL does not. Moreover, there is also enhanced security and improved debugging features in MySQLi where this is comparatively lagging in MySQL


##### Technical Specifications
- ###### Routing:
    This web app uses the framework routing method of laravel itself. All of the app's routes are defined in the `web.php`.
- ###### Cross-site Request Forgery
    Utlizing the power of laravel, we can now  protect our HTML forms from X-site request forgeries by using the laravel `@csrf` feature:
```HTML
<form method="POST" action="/profile">
    @csrf
</form>
```
- ###### Database
    This web app uses mysqli for storing and retrieving information for users.
- ###### Session
    This web app uses cookies as a way of storing browser sessions.

#### Features
##### Admin
- Login
- Register
- Manage available positions
- Manage running candidates
- Manage registered voters

##### Voter
- Login
- Register
- Cast a vote
- View ballot option after voting
- View election positions
- View voters

##### Future updates
- Dashboard
- Profile page
- Account settings
- Analytics
- Search Function
- Voter Information
- Candidate profile

#### Screenshots
![alt-text](./screenshots/Screenshot%20(74).png)
![alt-text](./screenshots/Screenshot%20(75).png)
![alt-text](./screenshots/Screenshot%20(76).png)
![alt-text](./screenshots/Screenshot%20(77).png)
![alt-text](./screenshots/Screenshot%20(78).png)
![alt-text](./screenshots/Screenshot%20(79).png)
![alt-text](./screenshots/Screenshot%20(81).png)
![alt-text](./screenshots/Screenshot%20(82).png)
![alt-text](./screenshots/Screenshot%20(83).png)
![alt-text](./screenshots/Screenshot%20(84).png)
![alt-text](./screenshots/Screenshot%20(85).png)
![alt-text](./screenshots/Screenshot%20(86).png)
![alt-text](./screenshots/Screenshot%20(87).png)
![alt-text](./screenshots/Screenshot%20(88).png)
![alt-text](./screenshots/Screenshot%20(89).png)
![alt-text](./screenshots/Screenshot%20(90).png)

## License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
