BG test task
===

TASK: You have the WordPress website on localhost. WordPress has the Custom Post Type ‘portfolio’. In Custom Post Type ‘portfolio’ we have one single post. The single post has Advanced Custom Fields fields ‘email’ and ‘comment’. If we open this single post on a front-end (as a user) he sees the form with three fields ‘email’, ‘comment’, and ‘post_id’ (hidden). The user fill up the form with email and comments and send the data by submitting the form (Ajax). When the functions fire, the single post of ‘portfolio’ on the admin side, should have the data in the Advanced Custom Fields fields from the form. 

[Deployed solution](http://testwww.cx.ua/)

## Project features:

* DB charset: utf8mb4_general_ci
* Parent theme: [Twenty Twenty-Two](https://wordpress.org/themes/twentytwentytwo/)
* Installed plugins: [ACF](https://wordpress.org/plugins/advanced-custom-fields/) , [Members](https://wordpress.org/plugins/members/)
* Screenshots folder contains captures of main moments


## Project setup

1. Import & Config DB
2. Install & Config WP 
3. Install & Activate parent theme
4. Install & Activate child theme
5. Install & Activate ACF plugin
6. Import ACF settings JSON
7. Install, Activate & Config Members plugin
8. Create post — Portfolio w/ selected template - Portfolio
9. TEST