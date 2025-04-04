# Online-Classroom-using-PHP

## Online Classroom
Online classroom management project mainly focuses on dealing with students and their assignments on a live class session. The system displays all the classes available when the user log into the system with their respective class codes required to join the class. The system also allows the student for any class enrollment. This project comes in two categories. A teacher/tutor panel and a student panel. The students can join any class using the class code provided by the teacher who created that class. Meaning, each user needs to have the class code to access the classroom. After enrollment, student can view all the posts from the teacher, he/she can also view the assignments uploaded by the teacher and can download them. The user can also search for a post, publish a post and leave comments on each enrolled class.
*Web Link: https://drinking-eraser.000webhostapp.com/register.php*
## Features
  
### (a) Student Panel
Description: The Student Panel is the interface through which students interact with the virtual classroom. It is designed to be user-friendly and accessible.

*Key Functions:*
  1. Dashboard: Displays an overview of all enrolled classes, upcoming assignments, and recent posts.
  2. Class Access: Allows students to access specific classes and participate in discussions.
  3. Assignments: Enables students to view, download, and submit assignments
  4. Profile Management: Students can update their personal information.

### (b) Teacher Panel
Description: The Teacher Panel is the administrative interface for teachers to manage their classes and interact with students.

*Key Functions:*
  1. Class Management: Create and delete classes.
  2. Post Announcements: Teachers can publish posts to share updates, resources, and important information.
  3. Assignment Management: Upload, manage and assignments.
  4. Student Interaction: View and respond to student comments, and manage class discussions.
  5. Profile Management: Teachers can update their personal information.

### (c) Create Classes
Description: This feature allows teachers to create new classes, defining the course code, section I.e A or B, and Course title or Subject.

*Key Functions:*
  1. Class Details: Input course code, section,  and course title or subject.
  2. Class Code Generation: Unique class code will be generated automatically  that students will use to join the class.
  3. Resource Upload: Upload course materials such as lecture notes, assignments, and multimedia resources.
   
### (d) Join Classes (with class code)
Description: Students can enroll in classes using a unique class code provided by the teacher. Teacher will have to send the class code to the students via email or whatsapp.

*Key Functions:*
  1. Class Code Entry: Students enter the class code in the specified field to join a class.
  2. Verification: The system verifies the class code and enrolls the student in the corresponding class.
  3. Access Granted: Upon successful enrollment, students gain access to all class materials and activities.

### (e) Manage Posts
Description: Both students and teachers can manage posts within their classes, facilitating communication and information sharing.

*Key Functions:*
  1. Create Posts: Users can write and publish posts to the class feed.
  2. Edit and Delete Posts: Users can modify or remove their own posts.
  3. Commenting: Students and teachers can comment on posts to engage in discussions or ask questions.
  
### (f) Upload Assignments
Description: Teachers can upload assignments for students to complete, providing all necessary instructions and resources.

*Key Functions:*
  1. Assignment Details: Specify assignment title, description, due date, and any other instructions.
  2. File Upload: Teachers can upload files related to the assignment. The allowed format for the uploads are jpg, jpeg, png, pdf, docx, doc, xlsx, pptx, ppt.
    
### (g) Post Assignments
Description: Students can submit their completed assignments through the system, ensuring a streamlined and organized submission process.

*Key Functions:*
  1. Submit Work: Students can upload their completed assignments in the format:  jpg, jpeg, png, pdf, docx, doc, xlsx, pptx, ppt.
  
### (h) Update User Profile
Description: Both students and teachers can update their personal profiles to keep their information current.

*Key Functions:*
  1. Personal Information: Edit personal details such as name, email, and contact information.
  2. Profile Picture: Upload or change profile pictures.
  3.  Password Management: Update passwords and manage security settings.
    
### (i) View Class Members
Description: Users can view a list of all members enrolled in a particular class, fostering a sense of community and collaboration.

*Key Functions:*
  1. Member List: Display names, roles (student or teacher), and profiles of all class members.

  ## Technologies used
A user intuitive dashboard is created with simple color combinations for greater user experience while using the Virtual classroom project build using PHP as the server language and MariaDB for the storage or database. For its UI elements, there’s no use of CSS framework; Bootstrap, but the whole project uses Vanilla CSS. Presenting a new Virtual Classroom management System project which included a user panel for each different user that contains essential features to follow up.

  ## Workflow
The first page that is loaded when the website is loaded is the login page where the user has the option of login and can as well click the register button if they don’t have an account. Once the user has logged into the system he/she will be redirected to the index page, which displays the classes that user is enrolled on, classes that the user is teaching will be shown as well. To the top right most corner of the index page there is a text displaying current logged in user name, the link is clickable which will take the user to the profile page, when they can update the profile information, there is (+) sign at the top right most corner which when click, it will redirect to a new page where the user can create a class or join a class, so long as they have the class code for that particular class that they wish to join.
When the user has already join the class, he/she can see the instructor name, list of other students in the class. They user can also publish a post and comment on a post when in class, there is also a Assignment section which show the uploaded assignments by the teacher, the student can comment on an assignment and can as well upload the assignment document in the specified format.

## IMAGES
 ### 1. Tutor pages
#### Home page
![Screenshot From 2024-10-19 15-28-24](https://github.com/user-attachments/assets/19c8af33-d091-4456-a540-997dfa89faa9)
#### Classroom creation
![image](https://github.com/user-attachments/assets/91678bdb-2194-4374-9b22-7e36cf2b21d3)
#### Class code used to Join Class
![Screenshot From 2024-10-19 15-29-37](https://github.com/user-attachments/assets/3b1aa3a8-5f68-4443-87f5-0cb5f9c2309f)
#### Classroom Posts section
![Screenshot From 2024-10-19 15-29-01](https://github.com/user-attachments/assets/4b65b3a6-68f2-4f0a-9eb5-0f66cede575f)
#### Classroom Assignments section
![Screenshot From 2024-10-19 15-29-26](https://github.com/user-attachments/assets/c25a1db7-3d92-4a65-919c-f4615c3ec645)

### 2. Student Pages
#### Home Page
![image](https://github.com/user-attachments/assets/689dab4a-091e-4bc8-b0ea-6039cd58f76d)
#### Joining a Class with class code provided by the tutor
![image](https://github.com/user-attachments/assets/572aa2b7-db01-4512-9501-4d08091e42da)
#### Home Page After enrolling
![image](https://github.com/user-attachments/assets/90081a08-7c57-4da1-8ebe-249f69b61105)
#### student writing a post
![image](https://github.com/user-attachments/assets/d3a5f3bd-b337-45b8-89e5-c834dac7ea53)

#### Student uploading assignment in the assignment section
![image](https://github.com/user-attachments/assets/c3f1066c-6ece-492a-bc43-c2e5b5bd7519)

#### Students might as well copy the class code and send to other colleques for them to join the class
![image](https://github.com/user-attachments/assets/3ab97100-2139-40f7-b10f-6a9fc6efc6fc)
#### Class members count increases when a new student joins the class
![image](https://github.com/user-attachments/assets/eb6079ca-e25d-4eff-aba7-8bf36f389bdb)

## WorkFlow
![diagram (2)](https://github.com/user-attachments/assets/80a92db1-63a7-4867-81e4-e64806ff2695)


