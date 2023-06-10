# Description of Practical Assignment “Phone book” Team of Developers
Renats Junusovs, rj22019 (design, business logic development, user interface design, programming of controllers and models)
# Development Environment
It is planned to develop the system in PHP 8.2.0 environment using Laravel 8 library. It is planned to use MySQL database for data storage. The code will be stored in the GitHub system.
# Main Functionality
Adding contacts: Users can add new contacts to their phone book by entering their name, phone number, email address, and other relevant information.
Editing contacts: Users can modify the contact information they have entered, such as changing phone numbers or updating email addresses.
Searching contacts: Users can search for specific contacts in the phone book by name, phone number, or other criteria. The program can display the search results in a list or a grid format.
Deleting contacts: Users can remove unwanted contacts from the phone book.
Sorting contacts: The phone book program can sort the contacts alphabetically or by other criteria, such as the date they were added.
Grouping contacts: Users can group contacts into different categories, such as family, friends, or business contacts, to make them easier to manage.
# Data Registry
The contact information can be organized into tables with columns representing the different fields for each contact, such as name, phone number, email address, etc. Each contact can be represented as a row in the table, with a unique identifier such as an auto-incrementing integer as the primary key.
When a user adds a new contact, the program can prompt the user to enter the relevant contact information into a form. This data can be validated to ensure that it meets the necessary requirements, such as the correct format for phone numbers or email addresses.
Once the data has been validated, the program can insert a new row into the appropriate table in the database, using the entered data to populate the relevant columns. Similarly, when a user edits an existing contact, the program can update the corresponding row in the database with the modified data.
      
When a user searches for a specific contact, the program can query the database using SQL statements to retrieve the relevant rows based on the search criteria. The search results can then be displayed to the user in the desired format.
#MVC
The system will be implemented following an MVC paradigm. The system will be distributed into the following components:
Models:
- User,
- Contact,
- Phone,
- Email.
Views:
- contact list view with a search box,
- individual contact view with contact details, phone numbers, and email addresses,
- create contact view,
- edit contact view,
- delete contact view,
   
- add phone number view,
- edit phone number view,
- delete phone number view,
- add email address view,
- edit email address view,
- delete email address view.
Controllers:
- ContactController with methods for retrieving and showing a list of contacts (index),
creating (create) and saving (store) a new contact, editing (edit) and saving changes in the database (update) of an existing contact, deleting a contact (destroy), returning a list of contacts filtered by search string (search);
- PhoneController with methods for adding (create) and saving (store) a new phone number to a contact, editing (edit) and saving changes in the database (update) of an existing phone number, deleting a phone number (destroy);
- EmailController with methods for adding (create) and saving (store) a new email address to a contact, editing (edit) and saving changes in the database (update) of an existing email address, deleting an email address (destroy).
User Roles
Guest: This role has limited access to the phone book program, guests can create, edit, and delete their own contacts, phone numbers, and email addresses, however after leaving the program nothing will be saved.
Registered user:
This role has access to all functionality of the phone book program except for managing user roles and permissions. Users can create, edit, and delete their own contacts, phone numbers, and email addresses.
Administrator:
This role has full access to all functionality of the phone book program.The admin can also manage user roles and permissions.
User Authentication
For the user authentication, there will be uses a local registration system.
System Interface
Menu bar: A menu bar can provide quick access to different areas of the program, such as contacts, phone numbers, email addresses, and settings.
Search bar: A search bar can help users find specific contacts, phone numbers, or email addresses quickly and easily.
   
Contact list: The contact list displays all the contacts in the system and can include information such as name, phone number, and email address. Users can typically sort the contact list by different fields (e.g. name, phone number, etc.) and search for specific contacts using the search bar.
Contact details: Clicking on a specific contact in the contact list opens up a contact details page, which displays all the information associated with that contact (e.g. name, phone number, email address, etc.). From here, users can also edit or delete the contact information.
Phone number and email address details: Clicking on a specific phone number or email address in the contact details page opens up a phone number or email address details page, which displays all the information associated with that phone number or email address. Users can also edit or delete the phone number or email address information.
 
