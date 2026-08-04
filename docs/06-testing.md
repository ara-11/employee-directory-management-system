# Employee Directory Management System

# Testing Documentation

## Testing Approach

This project was tested using manual functional testing.

Each feature was executed through the web browser to verify that the application behaved as expected.

The following modules were tested:

- Display Employee List
- Add Employee
- Edit Employee
- Delete Employee
- Search Employee
- Filter Employee
- Search and Filter
- Form Validation
- Invalid Employee ID Handling
- User Interface
- Responsive Layout

All test cases were executed in a local development environment using XAMPP and Microsoft Edge.

---

## Test Environment

- Operating System: Windows
- Local Server: XAMPP
- Database: MySQL
- Browser: Microsoft Edge / Google Chrome
- Application URL: http://localhost/employee-directory/

---

## Test Cases

| Test ID | Feature | Test Scenario | Expected Result | Actual Result | Status |
|---|---|---|---|---|---|
| TC-001 | Display Employees | Open the employee list page | All saved employee records are displayed | |Pass |
| TC-002 | Add Employee | Submit valid employee information | New employee is saved and displayed in the list |New employee was successfully added and displayed in the employee list. | Pass |
| TC-003 | Add Employee | Submit the form with an empty required field | Form submission is prevented or an error is displayed | |Pass |
| TC-004 | Add Employee | Enter an invalid email address | Invalid email is rejected | |Pass|
| TC-005 | Edit Employee | Update valid employee information | Employee record is updated successfully | |Pass|
| TC-006 | Edit Employee | Open an invalid employee ID (edit.php?id=999) | An error message is displayed | Employee not found. | Pass |
| TC-007 | Delete Employee | Confirm deletion | Selected employee record is removed | |Pass|
| TC-008 | Delete Employee | Cancel deletion | Employee record remains unchanged | |Pass|
| TC-009 | Search Employee | Search using a full name | Matching employee is displayed | Not supported in Version 1.0 (Future Enhancement). | N/A |
| TC-010 | Search Employee | Search using a partial keyword | Matching employee is displayed | |Pass|
| TC-011 | Search Employee | Search for a nonexistent employee | A no-results message is displayed | |Pass|
| TC-012 | Filter Employee | Select a department | Only employees from that department are displayed | |Pass|
| TC-013 | Search and Filter | Use a keyword and department together | Only records matching both conditions are displayed | |Pass|
| TC-014 | Clear Search and Filter | Click Clear | All employee records are displayed again | |Pass|


## Test Summary

| Item | Result |
|------|--------|
| Total Test Cases | 14 |
| Passed | 13 |
| Failed | 0 |
| Not Applicable | 1 |
| Overall Result | ✅ PASS |


## Bug Fixing Summary

No functional bugs were identified during Version 1.0 testing.

One enhancement was identified:

- Full Name Search (Mark Reyes)
  - Status: Planned for Version 1.1

## Future Improvements

### 1. Support Full Name Search

Current Behavior

Searching:

Mark Reyes

returns no matching records because the application searches each field individually.

Proposed Enhancement

Use SQL CONCAT() to combine first_name and last_name during search.

Example:

CONCAT(first_name, ' ', last_name) LIKE ?

Priority

Medium

Target Version

Version 1.1
