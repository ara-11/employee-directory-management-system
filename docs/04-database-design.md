# Employee Directory Management System

# Database Design

---

## Database Information

Database Name:

employee_directory

Database Management System:

MySQL

---

## Entity

Employees

---

## Table Structure

| Field      | Data Type | Length | Null | Key | Default           | Description            |
| ---------- | --------- | ------ | ---- | --- | ----------------- | ---------------------- |
| id         | INT       | 11     | No   | PK  | Auto Increment    | Unique employee ID     |
| first_name | VARCHAR   | 100    | No   |     |                   | Employee first name    |
| last_name  | VARCHAR   | 100    | No   |     |                   | Employee last name     |
| email      | VARCHAR   | 150    | No   |     |                   | Employee email address |
| department | VARCHAR   | 100    | No   |     |                   | Employee department    |
| position   | VARCHAR   | 100    | No   |     |                   | Employee job position  |
| created_at | TIMESTAMP | -      | No   |     | CURRENT_TIMESTAMP | Date created           |

---

## Primary Key

-`id`

---

## Relationships

None