<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Gym Booking App

The Gym Booking App is a robust and feature-rich application developed using the Laravel framework. It caters to the needs of three distinct types of users: instructors, members, and administrators. This application streamlines the process of scheduling and managing fitness classes.

Instructor Functionality:<br />
Instructors can schedule fitness classes by specifying the type of class, date, and time.<br />
They have access to a dashboard to view all their upcoming classes.<br />
Instructors can cancel scheduled classes when necessary.<br />

Member Functionality:<br />
Members can browse and view all scheduled fitness classes.<br />
They have the option to select and book available slots in their preferred classes.<br />
Members can also keep track of all their upcoming bookings and cancel them if needed.<br />

Real-time Notifications:<br />
In the event of an instructor canceling a scheduled class, an automatic email notification is sent to all members who made a booking for that class. <br />

Technologies and Techniques Used:<br />
User Roles: The application implements user roles to manage different levels of access and functionality for instructors, members, and admins.<br />
Custom Middleware: Middleware is utilized to customize and enhance the HTTP request-handling process.<br />
Gates and Policies: Laravel's authorization system is leveraged to control access to specific actions and resources.<br />
Database Seeding and Factories: To generate initial data and test data for the database.<br />
Many-to-Many Relationships: Complex relationships between classes, instructors, and members are efficiently managed.<br />
Eager Loading: Enhances performance by efficiently retrieving related data.<br />
Query Scopes: Custom query scopes are employed to simplify complex database queries.<br />
Custom Commands and Logs: Custom Artisan commands are used for various tasks, and application logs are maintained.<br />
Events and Listeners: Events and listeners handle actions like sending email notifications.<br />
Mail Notifications: Laravel's mail notification system ensures effective communication.<br />
Jobs and Queues: Background processing and queuing are used for tasks like sending email notifications.<br />
Task Scheduling: Scheduled tasks are set up for routine maintenance and notifications.<br />
Testing: HTTP and database testing.<br />

![Screenshot 2023-09-15 121458](https://github.com/qaserge/gym-booking/assets/45569665/a9d02e97-3420-47ca-9fa6-41e1b9c0bf89)
![image](https://github.com/qaserge/gym-booking/assets/45569665/4bf646c3-5286-4845-bbe7-64cacbafd307)
![image](https://github.com/qaserge/gym-booking/assets/45569665/9d607435-eeb5-4136-a589-39bb137e82a4)



