# Employee Directory Management System

# Data Dictionary

---

## Table: employees

| Field | Data Type | Length | Description |
|--------|-----------|--------|-------------|
| id | INT | 11 | Unique identifier for each employee record. |
| first_name | VARCHAR | 100 | Stores the employee's first name. |
| last_name | VARCHAR | 100 | Stores the employee's last name. |
| email | VARCHAR | 150 | Stores the employee's email address. |
| department | VARCHAR | 100 | Stores the department where the employee belongs. |
| position | VARCHAR | 100 | Stores the employee's job position. |
| created_at | TIMESTAMP | - | Stores the date and time when the employee record was created. |

---

## Primary Key

`id`

The `id` field uniquely identifies each employee record.

---

## Notes

- The `id` field is automatically generated using `AUTO_INCREMENT`.
- The `created_at` field automatically stores the current date and time using `CURRENT_TIMESTAMP`.
- This version of the system contains only one table (`employees`), therefore no foreign keys or relationships are defined.