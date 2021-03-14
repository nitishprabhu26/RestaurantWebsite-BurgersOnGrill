Authors : NITISH PRABHU KOTA,
          SANKET MANIK SALUNKE
LINK: https://burgersongrill.ml/
===========================================================

Admin Accounts:(Use these to login as admin)

Email: nitish.prabhu26@gmail.com
Password: password

User Accounts:(Use these to login as user)

Email: nitishprabhuk@gmail.com
password: password

===========================================================

The Project contains the following Pages: 

1) Home Page (INICIO)
2) About Us  (SOBRE NOSOTROS)
3) Menu	 
4) Blog 
5) Contact  (CONTACTO)
6) Register (REGISTRO)
7) Login    (INICIAR SESION)
8) Cart    ( Cart symbol) ( Appears only after logging in)
9) Logout(appears only after logging in)

We have two user types:
1) Admin - An admin account can be created only by providing details directly in the database and not through the application.
    Similar to how only a super admin can add admin profiles to a system.
2) User/customer - An user account can be created via the application by providing the details as well as by the superadmin/admin.
===========================================================
Landing page for Admin: CONTACTO
Landing page for User: HOME
===========================================================

Pages explained:

1) Contact ( CONTACTO ):

This is the landing page after admin login. This page contains the feedback details fetched from the database of all the users 
who have provided feedback.  Admin can review all the feedback messages from this page. In addition to this the page contains
a form through which user(including the admin) can provide feedback. This feedback is stored in the table: contact_table

2) Cart ( Cart Symbol ): (INSERT, DELETE and UPDATE options for the ADMIN)

On click of the cart icon, the user/admin will be taken to the cart page. this icon will be visible only if a person has 
logged in to the application. This page contains the option "Add more Burgers" for admin to add more burgers to the available burger list.
It also contains the option "Remove Existing Burgers" for admin to remove the burgers from the available burger list.

And for the users, the user can add the burgers to the cart by providing the quantity and clicking on add to cart button. If quantity is not 
provided then only a single burger will be added to the list. Also the user can remove the burger from the list by clicking on the remove button.

3) Home page: 

Landing page for the user. on click of Menu buttons provided in this page, it will take the user to menu page
Similarly, menu buttons provided in the About us page will exhibit the same behaviour.

============================================================

Validations for Login/Register/Contact forms:

HTML, Javascript and PHP validation are provided for all the fields like name, email, address, password etc

============================================================


				 
