# EventAttendeeManager
It is a web application designed to streamline the registration process for conferences and events. It offers a user-friendly platform where attendees can easily register for the conference/events by providing their personal information, including name, contact details, and area of expertise. 

Key features include:

**User-Friendly Registration:**
A straightforward registration form that allows attendees to quickly sign up for the event.

**Database Management:** 
Attendee details are securely stored and managed in a database, making it easy to access and update information.

**View and Edit Attendee Details:** 
Attendees can view their registration details and, if necessary, edit their personal information.

**Attendee List:** 
A comprehensive list of all registered attendees, providing event organizers with an overview of participants.

**Delete Records:** 
An option to remove attendee records, enabling efficient data management.

**Success and Error Feedback:** 
Real-time feedback for attendees on the success or failure of their registration.


Working:


**index.php (Registration Form):** This is the main page where users can register. Users provide their personal information, such as first name, last name, date of birth, email, contact number, and select their specialty from a dropdown list. When the user submits the form, the data is sent to success.php for processing.

**success.php (Form Submission Handling):** After form submission from index.php, this page processes the user's registration. It connects to the database and inserts the registration details into the database. If the insertion is successful, it displays a success message along with the entered data. If the insertion fails, it displays an error message.

**view_records.php (List of Attendees):** This page displays a list of attendees who have registered for the conference/event. It retrieves attendee records from the database and displays them in a table. It provides options to view details and delete records.

**view.php (Attendee Details):** When a user selects "Details" for a specific attendee on view_records.php, they are taken to this page. It displays detailed information about a specific attendee. Users can also choose to edit the attendee's details.

**edit.php (Edit Attendee Details):** When users choose to edit an attendee's details on view.php, they are taken to this page. Users can edit the attendee's information, including first name, last name, date of birth, email, contact, and specialty. After editing, users can click the "UPDATE" button, which triggers updateDetails.php.

**updateDetails.php (Update Attendee Details):** It handles the update of attendee details after editing. It connects to the database and updates the corresponding attendee's information.

**delete_record.php (Delete Attendee Record):** It allows users to delete an attendee record based on the selected ID. It connects to the database and deletes the selected record.
