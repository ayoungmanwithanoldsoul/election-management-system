# Election Management System
## CS50x Final Project


![alt text](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg "Laravel")
### Introduction
Conducting Student/Pupil Government Election is a bit complicated especially when done usign the traditional ballot and paper method. Most school siun the Philippines still utilize the traditional method when conducting elections. To tackle this problem I created an election management system suitable for this stiation.This lection management system is compliant to the specifications of DepEd Philippines.

##### Technologies utilized:

- PHP 8
- Laravel 9
- Bootstrap 4
- MySQLi

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
