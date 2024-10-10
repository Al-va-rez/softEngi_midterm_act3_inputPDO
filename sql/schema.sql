CREATE TABLE software_engineers (
    applicant_id INT AUTO_INCREMENT PRIMARY KEY,
    first_Name VARCHAR (50),
    last_Name VARCHAR (50),
    degree VARCHAR (50),
    college VARCHAR (100),
    residence VARCHAR (150),
    prev_exp VARCHAR (100),
    contact_Num VARCHAR (15),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);