
# Employee Directory Management System

# Design System

---

## 1. Design Direction

The user interface follows a corporate design style suitable for an employee management system.

The design should be:

- Clean
- Professional
- Easy to read
- Consistent
- Responsive
- Focused on usability

---

## 2. Color Palette

| Purpose | Color | Hex Code |
|---|---|---|
| Primary | Blue | `#2563EB` |
| Primary Hover | Dark Blue | `#1D4ED8` |
| Success | Green | `#16A34A` |
| Danger | Red | `#DC2626` |
| Page Background | Light Gray | `#F8FAFC` |
| Card Background | White | `#FFFFFF` |
| Border | Light Gray | `#E2E8F0` |
| Main Text | Dark Slate | `#1E293B` |
| Secondary Text | Gray | `#64748B` |

### Usage

- Blue is used for primary actions such as Add, Save, Update, and Apply.
- Red is used for destructive actions such as Delete.
- Green may be used for success messages.
- Light gray is used for the page background.
- White is used for cards, forms, and table containers.

---

## 3. Typography

### Font Family

```css
font-family: Arial, sans-serif;
````

### Text Hierarchy

| Element         | Recommended Size | Weight |
| --------------- | ---------------: | ------ |
| Main Page Title |             28px | Bold   |
| Section Heading |             22px | Bold   |
| Form Heading    |             20px | Bold   |
| Body Text       |             16px | Normal |
| Labels          |             14px | Bold   |
| Table Headers   |             13px | Bold   |
| Secondary Text  |             14px | Normal |

### Typography Rules

* Use dark text for readability.
* Use secondary gray text for descriptions.
* Avoid decorative fonts.
* Keep headings consistent across pages.

---

## 4. Layout Rules

### Main Container

* Maximum width: `1100px`
* Center the content horizontally.
* Add consistent spacing around the page.
* Use white cards over a light gray background.

Example:

```css
.page-container {
    width: min(1100px, calc(100% - 32px));
    margin: 32px auto;
}
```

### Spacing

Use consistent spacing values:

```text
8px
12px
16px
20px
24px
32px
```

### Border Radius

Use:

```css
border-radius: 8px;
```

### Shadow

Use a light shadow only:

```css
box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
```

---

## 5. Button Styles

All buttons should have:

* Clear labels
* Consistent height
* Rounded corners
* Bold text
* Hover feedback
* No unnecessary decoration

### Primary Button

Used for:

* Add Employee
* Save Employee
* Update Employee
* Apply Filter

```css
.button-primary {
    background: #2563EB;
    color: #FFFFFF;
}
```

### Secondary Button

Used for:

* Cancel
* Clear
* Back to Employee List

```css
.button-secondary {
    background: #E2E8F0;
    color: #1E293B;
}
```

### Edit Button

```css
.button-edit {
    background: #FEF3C7;
    color: #92400E;
}
```

### Delete Button

```css
.button-delete {
    background: #FEE2E2;
    color: #B91C1C;
}
```

---

## 6. Form Styles

Forms should:

* Use clear labels.
* Keep consistent input widths.
* Use visible focus states.
* Avoid excessive spacing.
* Group related fields together.
* Place action buttons at the bottom.

### Input Style

```css
input,
select {
    width: 100%;
    min-height: 42px;
    padding: 10px 12px;
    border: 1px solid #CBD5E1;
    border-radius: 8px;
    font: inherit;
}
```

### Focus State

```css
input:focus,
select:focus {
    border-color: #2563EB;
    outline: 2px solid rgba(37, 99, 235, 0.15);
}
```

### Required Fields

Required fields should use the HTML `required` attribute.

Validation messages should be:

* Clear
* Specific
* Easy to understand

---

## 7. Table Styles

The employee table should:

* Use the full available width.
* Have readable spacing.
* Use a light header background.
* Highlight rows on hover.
* Support horizontal scrolling on small screens.
* Keep action buttons visible and organized.

### Table Header

```css
.employee-table th {
    background: #F8FAFC;
    color: #475569;
    font-size: 13px;
    text-transform: uppercase;
}
```

### Table Rows

```css
.employee-table tbody tr:hover {
    background: #F8FAFC;
}
```

### Table Container

```css
.table-container {
    overflow-x: auto;
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 8px;
}
```

---

## 8. Page Components

### Header

The header should contain:

* Application name
* Short description
* Link to the employee list

### Toolbar

The toolbar should contain:

* Search input
* Department filter
* Apply button
* Clear button
* Add Employee button

### Employee Table

The table should contain:

* ID
* Employee Name
* Email
* Department
* Position
* Date Added
* Actions

### Forms

The Add and Edit pages should use the same layout and styling.

---

## 9. Responsive Design

For smaller screens:

* Stack the header content vertically.
* Stack search and filter controls.
* Make the Add Employee button full width.
* Allow the employee table to scroll horizontally.
* Reduce outer page margins.

Recommended breakpoint:

```css
@media (max-width: 760px) {
    /* Mobile layout rules */
}
```

---

## 10. Consistency Rules

* Use the same button classes across all pages.
* Use the same form layout for Add and Edit.
* Use the same colors throughout the system.
* Do not introduce new colors without updating this document.
* Keep border radius and spacing consistent.
* Prioritize readability over decoration.





