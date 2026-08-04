# Employee Directory Management System

# 3. System Design

# 3.1 System Architecture

The Employee Directory Management System follows a simple three-layer architecture consisting of the user interface, application logic, and database.

## Architecture Diagram
User
|
v
Web Browser
|
v
PHP Application
|
v
MySQL Database


## Components Description

### User

The user interacts with the system through the web interface.

### Web Browser

The browser serves as the interface where users access and manage employee records.

### PHP Application

The PHP application handles the business logic, processes user requests, and communicates with the database.

### MySQL Database

The database stores and manages employee information.

# 3.2 Use Case Diagram

## Actor

### HR Staff

The HR Staff is the primary user of the system. The user can manage employee records through the available system functions.

## Use Cases

| Use Case | Description |
|---|---|
| View Employee Records | Allows users to view all employee information stored in the system. |
| Add Employee | Allows users to create new employee records. |
| Edit Employee | Allows users to update existing employee information. |
| Delete Employee | Allows users to remove employee records. |
| Search Employee | Allows users to find employee records using keywords. |
| Filter Employee | Allows users to organize records by department. |


## Use Case Diagram
The Use Case Diagram illustrates the interactions between the primary user (HR Staff) and the Employee Directory Management System.

The HR Staff can perform the following functions:

- View Employee Records
- Add Employee
- Edit Employee
- Delete Employee
- Search Employee
- Filter Employee

![Use Case Diagram](diagrams/exports/use-case-diagram.png)
+--------------------------------+

# 3.3 Flowchart

## System Process Flow

The system follows the process below:

START
|
v
Open Employee Directory System
|
v
Display Employee List
|
v
Select Action
|
+----------------+
| |
v v

Add Employee Manage Existing Employee

| |
v |
Input Employee |
Information |
| |
v |
Save Record |
| |
+----------+---------+
|
v

Update Employee List
|
v
END


## Main Processes

### Add Employee

1. User selects Add Employee.
2. User enters employee information.
3. System validates the input.
4. System saves the data into the database.
5. System displays the updated employee list.


### Edit Employee

1. User selects an existing employee.
2. User modifies employee information.
3. System updates the database.
4. System displays the updated record.


### Delete Employee

1. User selects an employee record.
2. System asks for confirmation.
3. System removes the record from the database.
4. System refreshes the employee list.


### Search and Filter Employee

1. User enters search keyword or selects department.
2. System processes the request.
3. System displays matching employee records.

# 3.4 Activity Diagram

## Add Employee

```
● Start
    │
    ▼
User clicks "Add Employee"
    │
    ▼
System displays Add Employee Form
    │
    ▼
User enters employee information
    │
    ▼
System validates input
    │
    ▼
Is input valid?
 ┌───────────────┐
 │               │
 │ No            │ Yes
 ▼               ▼
Display Error    Save Employee
Message          to Database
 │               │
 └───────┬───────┘
         ▼
Display Updated Employee List
         │
         ▼
        End
```

### Description

1. The user selects the **Add Employee** option.
2. The system displays the employee form.
3. The user enters the required information.
4. The system validates the input.
5. If the input is invalid, an error message is displayed.
6. If the input is valid, the system saves the record to the database.
7. The updated employee list is displayed.


# 3.5 Entity Relationship Diagram (ERD)

## Entity

### Employees

+------------------------------------------------------+
| EMPLOYEES |
+------------------------------------------------------+
| PK id INT AUTO_INCREMENT |
| first_name VARCHAR(100) |
| last_name VARCHAR(100) |
| email VARCHAR(150) |
| department VARCHAR(100) |
| position VARCHAR(100) |
| created_at TIMESTAMP |
+------------------------------------------------------+


### Description

The system contains a single entity named **Employees**. It stores the personal and employment information of each employee.

The **id** field serves as the primary key and uniquely identifies each employee record.