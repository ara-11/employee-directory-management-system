# Employee Directory Management System

![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-MariaDB-4479A1?logo=mysql&logoColor=white)
![Status](https://img.shields.io/badge/Status-Completed-success)
![SDLC](https://img.shields.io/badge/Development-SDLC-blue)

---
project screenshot
---
## Project Information

| Item | Details |
|------|---------|
| **Project Name** | Employee Directory Management System |
| **Version** | 1.0.0 |
| **Project Type** | Web Application |
| **Development Method** | Software Development Life Cycle (SDLC) |
| **Backend** | PHP |
| **Frontend** | HTML5, CSS3 |
| **Database** | MySQL |
| **Status** | ✅ Completed |

---

## Overview

A simple PHP and MySQL web application for managing employee records through CRUD operations, employee search, and department filtering.

The project was developed by following the complete **Software Development Life Cycle (SDLC)**, including planning, requirements analysis, system design, development, testing, documentation, and deployment.

---

## Development Workflow

```
Planning
      ↓
Requirements Analysis
      ↓
System Design
      ↓
Development
      ↓
Testing
      ↓
Documentation
      ↓
Deployment
```

---

## Table of Contents

- Overview
- Development Workflow
- Features
- Technologies Used
- Project Structure
- Documentation
- System Design
- Installation Guide
- Screenshots
- Testing Documentation
- Future Improvements
- Planned Features for Version 2.0
- Repository Statistics
- Author

---

# Features

## Employee Management

- Display employee records
- Add new employee
- Edit employee information
- Delete employee records

## Search & Filtering

- Search employees by name, email, department, or position
- Filter employees by department
- Combined search and department filtering

## User Interface

- Responsive layout
- Clean and modern interface
- Organized project structure

## Documentation

- Complete SDLC documentation
- System design diagrams
- Database documentation
- Testing documentation

---

# Technologies Used

## Programming Languages

- PHP
- HTML5
- CSS3
- SQL

## Database

- MySQL

## Development Tools

- Visual Studio Code
- XAMPP
- phpMyAdmin
- Draw.io
- Git
- GitHub

## Documentation

- Markdown (.md)

## Web Browser

- Microsoft Edge

---

# Project Structure

```text
employee-directory/
│
├── assets/
│   └── css/
│       └── style.css
│
├── config/
│   └── database.php
│
├── database/
│   └── employee_directory.sql
│
├── docs/
│   ├── diagrams/
│   │   ├── exports/
│   │   └── source/
│   │
│   ├── 00-project-roadmap.md
│   ├── 01-planning.md
│   ├── 02-requirements.md
│   ├── 03-system-design.md
│   ├── 04-database-design.md
│   ├── 05-data-dictionary.md
│   ├── 06-testing.md
│   ├── 07-known-limitations.md
│   └── 08-design-system.md
│
├── includes/
│   ├── header.php
│   ├── navbar.php
│   └── footer.php
│
├── screenshots/
│
├── add.php
├── delete.php
├── edit.php
├── index.php
├── save.php
├── update.php
│
├── .gitignore
└── README.md
```

---

## Folder Description

| Folder/File | Description |
|-------------|-------------|
| assets | Contains CSS and other static resources. |
| config | Database configuration files. |
| database | SQL file used for setting up the database. |
| docs | Complete SDLC documentation. |
| includes | Reusable layout components. |
| screenshots | Project screenshots. |
| index.php | Displays the employee list. |
| add.php | Add employee page. |
| edit.php | Edit employee page. |
| delete.php | Delete employee process. |
| save.php | Saves a new employee. |
| update.php | Updates employee information. |

---

# Documentation

Complete project documentation is available inside the **docs/** directory.

| Document | Description |
|----------|-------------|
| 00-project-roadmap.md | Project roadmap |
| 01-planning.md | Planning phase |
| 02-requirements.md | Functional and non-functional requirements |
| 03-system-design.md | System design documentation |
| 04-database-design.md | Database design |
| 05-data-dictionary.md | Data dictionary |
| 06-testing.md | Testing documentation |
| 07-known-limitations.md | Known limitations |
| 08-design-system.md | UI design system |

---

# System Design

The application was designed following the **Software Development Life Cycle (SDLC)**.

| Diagram | Description |
|---------|-------------|
| System Architecture | Overall application structure |
| Use Case Diagram | User interactions with the system |
| Main Flowchart | Overall application workflow |
| Activity Diagram | Employee creation workflow |
| Entity Relationship Diagram | Database structure |
| Wireframe | Initial UI design |

### System Architecture

![System Architecture](docs/diagrams/exports/system-architecture.png)

### Use Case Diagram

![Use Case](docs/diagrams/exports/use-case-diagram.png)

### Main Flowchart

![Flowchart](docs/diagrams/exports/main-flowchart.png)

### Activity Diagram

![Activity Diagram](docs/diagrams/exports/activity-diagram.png)

### Entity Relationship Diagram

![ERD](docs/diagrams/exports/entity-relationship.png)

### Wireframe

![Wireframe](docs/diagrams/exports/wireframe.png)

---

# Installation Guide

## Prerequisites

- XAMPP
- Visual Studio Code (optional)
- Modern web browser

## Installation Steps

1. Clone or download this repository.

2. Copy the project folder to:

```text
C:\xampp\htdocs\
```

3. Start **Apache** and **MySQL** using XAMPP.

4. Open **phpMyAdmin**.

5. Create a database named:

```text
employee_directory
```

6. Import:

```text
database/employee_directory.sql
```

7. Visit:

```text
http://localhost/employee-directory/
```

The application should now be running successfully.

---

# Screenshots

| Home Page | Add Employee |
|-----------|--------------|
| ![](screenshots/01-home-page.png) | ![](screenshots/02-add-employee.png) |

| Edit Employee | Search Employee |
|---------------|-----------------|
| ![](screenshots/03-edit-employee.png) | ![](screenshots/04-search-employee.png) |

| Filter Employee | Employee List |
|----------------|---------------|
| ![](screenshots/05-filter-employee.png) | ![](screenshots/06-employee-list.png) |

---

# Testing Documentation

The project was tested manually after implementation to verify that all major features work correctly.

Completed tests include:

- Functional Testing
- CRUD Testing
- Search Testing
- Filter Testing
- Bug Fixing

Detailed results are available in:

```text
docs/06-testing.md
```

---

# Future Improvements

## Search

- Support searching by the employee's full name.
- Improve search flexibility.

## User Interface

- Improve the overall user interface.
- Improve mobile responsiveness.
- Display success and error notifications.

## Employee Management

- Add pagination.
- Allow sorting by employee name, department, position, and date added.
- Improve validation and error handling.
- Export employee records to CSV or PDF.

## Security

- User authentication
- Role-based access control

---

# Planned Features for Version 2.0

Version 2.0 focuses on improving data consistency by introducing a dedicated **Department Management Module**.

## Department Management Module

- Create Department
- Edit Department
- Delete Department
- Department Management Page
- Prevent duplicate department names

## Employee Form Improvements

Replace the department text field with a dynamically populated dropdown list.

Example:

```text
Department

▼ IT
▼ HR
▼ Finance
▼ Accounting

──────────────

+ Add New Department
```

## Database Improvements

Current:

```text
employees
---------
department (VARCHAR)
```

Version 2.0:

```text
departments
-----------
id
department_name
created_at
```

```text
employees
---------
department_id (FK)
```

### Benefits

- Prevents duplicate department names
- Improves data consistency
- Simplifies department management
- Supports database normalization
- Reduces data redundancy
- Easier future expansion

---

### Data Formatting

Automatically format employee names, department names, and position titles into a consistent display format while preserving valid abbreviations such as HR, IT, QA, and DevOps.

# Repository Statistics

| Category | Value |
|----------|-------|
| Language | PHP |
| Database | MySQL |
| Development Method | SDLC |
| Documentation Files | 9 |
| System Diagrams | 6 |
| Screenshots | 6 |
| Version | 1.0.0 |
| Status | Completed |

---

# Live Demo

> Coming Soon

---

# Author

**Ara Mae Duco**

This project was developed as part of my software development portfolio to practice:

- PHP
- MySQL
- CRUD Operations
- Responsive Web Design
- Software Development Life Cycle (SDLC)
- Git & GitHub

Feel free to explore the project, review the documentation, and provide feedback.