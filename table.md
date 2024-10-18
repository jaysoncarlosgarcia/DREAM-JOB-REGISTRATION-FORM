# employee_records TABLE
```
CREATE TABLE employee_records (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR (50),
    last_name VARCHAR (50),
    gender VARCHAR (50),
    birthday DATE,
    position VARCHAR (50),
    status VARCHAR (50),
    department VARCHAR (50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
