CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(255),
    Email VARCHAR(255),
    Password VARCHAR(255),
    Profil VARCHAR(255),
    Roles VARCHAR(255)
);

CREATE TABLE Teachers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Subject VARCHAR(255),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE Students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Branch VARCHAR(255),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE Marks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Mark INT,
    Semester VARCHAR(255),
    student_id INT,
    teacher_id INT,
    FOREIGN KEY (student_id) REFERENCES Students(id),
    Foreign Key (teacher_id) REFERENCES Teachers(id)
);

CREATE TABLE Absence (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Number INT,
    Date VARCHAR(255),
    student_id INT,
    FOREIGN KEY (student_id) REFERENCES Students(id)
);

CREATE TABLE FeedBack (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Comment TEXT,
    student_id INT,
    FOREIGN KEY (student_id) REFERENCES Students(id)
);

CREATE TABLE Books (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Profil VARCHAR(255),
    Titel VARCHAR(255),
    Auteur VARCHAR(255),
    description TEXT
);

CREATE TABLE Reservation (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Date_Debut VARCHAR(255),
    Date_Fin VARCHAR(255),
    book_id INT,
    student_id INT,
    FOREIGN KEY (book_id) REFERENCES Books(id),
    FOREIGN KEY (student_id) REFERENCES Students(id)
);