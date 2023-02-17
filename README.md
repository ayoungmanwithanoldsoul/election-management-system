# Election Management System
## CS50x Final Project


![alt text](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg "Laravel")
#### Video Demo: https://youtu.be/o_BrMlIlWps
#### Description:
Conducting Student/Pupil Government Election is a bit complicated especially when done usign the traditional ballot and paper method. Most schools in the Philippines still utilize the traditional method when conducting elections. To tackle this problem I created an election management system suitable for this situation.This election management system is compliant to the specifications of DepEd Philippines.

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
- Vote page
![alt-text](./screenshots/Screenshot%20(74).png)
- Nominees/Candidates page
![alt-text](./screenshots/Screenshot%20(75).png)
- Voter login page
![alt-text](./screenshots/Screenshot%20(76).png)
- Voter registration page
![alt-text](./screenshots/Screenshot%20(77).png)
- Admin login page
![alt-text](./screenshots/Screenshot%20(78).png)
- Admin Registration page
![alt-text](./screenshots/Screenshot%20(79).png)
- Vote page (already voted)
![alt-text](./screenshots/Screenshot%20(81).png)

![alt-text](./screenshots/Screenshot%20(82).png)
- Responsive designs
![alt-text](./screenshots/Screenshot%20(83).png)
![alt-text](./screenshots/Screenshot%20(84).png)
![alt-text](./screenshots/Screenshot%20(85).png)
![alt-text](./screenshots/Screenshot%20(86).png)
![alt-text](./screenshots/Screenshot%20(87).png)
![alt-text](./screenshots/Screenshot%20(88).png)
![alt-text](./screenshots/Screenshot%20(89).png)
![alt-text](./screenshots/Screenshot%20(90).png)

## About CS50x
CS50x is a highly recommended computer science introductory course from Harvard University taught by David Malan. By the end of the course, students will learn how to think algorithmically, and solve complex problems efficiently. Its topics include abstraction, algorithms, data structures, encapsulation, resource management, cybersecurity, web development, and software engineering. The course starts by teaching students a language called C which is the basis of todays programming language. It then transitions, to a more friendly higher-level programming language called Python that is similar to C. After that it introduces SQL for storing and managing databases, thereafter, for frontend development it introduces HTML, CSS and Javascript to create a responsive and more dynamic contents for your web app. Finally at the end of the course is the final project which summarizes all of the concepts that you've leanred throughout the duration of the course.

## License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
