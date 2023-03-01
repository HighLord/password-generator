# Password-generator

Chrome has "suggess password" when you need to create a password on a password field.
Strong secured passwords which then automatically becomes unsecured once again because chrome stores that password on your google account and in your browser.

## Description

- This code allows you create a password for any website or file by putting the website url e.g ("github.com") without the brackets or quotes and then defining a master password.
- It generates a static password based on yout default passsword and the website url. 
- Even if you forget the generated password, you can always go back and regenerate the same password provided you still possess your master password which you should never forget.
- You do not have to commit the website url to memory as you can always get it based on the website you want to use the password for.
- You can use the master password for multiple website urls.
- Your generated password, master password and website url is never saved on any server.
- Please note that any slight changes to your url or master password will change your generated password.
- Use with caution. Always have your master password stored in your mind.

### Usage

- Example 1
-- ASSUMING your master password is "Password12345"
-- you are on your gmail account page and want to create an account or change password, you can either copy the url (https://accounts.google.com) and fill as your website url and your master password as "password12345"
which will generate a static password for that email account |||or if you have multiple email accounts, e.g myname@gmail.com, and my2ndname@gmail.com... you can use each email account as a website url and your master password "password12345" to generate a password for each account.
- - - - - -
- Simply download code and upload to a php backend.
- send a post request to the php page (password-generator.php). the post fields should be "default_key" for the master password and "website_name" for the url.
- This page can be viewed on [my portfolio website](https://lordlawrence.netlify.app).

### Support

- - - -
contact me at <Lawrencechinakaa@gmail.com>
