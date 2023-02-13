
# Laravel-Socialite---All-Providers-Complete-Implementation 

### Description

Welcome aboard fellow developers, this is where you will one-stop solution to all the problems or issues that you may be facing while implementing the user authentication using OAuth providers supported by Laravel Socialite. And, here I am talking about all the seven supported OAuth providers i.e. Facebook, Google, Twitter, LinkedIn, GitHub, GitLab and Bitbucket

### Demo
<img src="https://github.com/prajan11/Laravel-Socialite---OAuth-Authentication-With-All-Supported-Providers/blob/main/LoginUI.png" />

<a name="requirements"></a>
## Requirements

This project is developed in Laravel 9.19 and uses php version 8.0.2. So, please make sure that you have php as well as Laravel with either same or higher version. Also, make sure that your machine has latest version of node and npm installed. For the rest, please refer to composer.json file and make sure to meet the versions of dependencies listed. 

<a name="installation"></a>

## Installation

For running this project on your local machine, please follow following steps:
1. Clone this repository (You can use HTTPS or SSH)
    ```sh
    git clone https://github.com/prajan11/Laravel-Socialite---OAuth-Authentication-With-All-Supported-Providers.git
    ```

1. Please open the project and make sure you are in the root directory

1. Copy .env.example file to .env file
    ```sh
    cp .env.example .env
    ```
1. Create database with any name you fancy and update it in .env file accordingly 

1. Install PHP dependencies using composer install command
    ```sh
    composer install
    ```

1. Generate application key using artisan command as below 
    ```sh
    php artisan key:generate
    ```

1. Since we are using Laravel Breeze in this project for authentication features provided by Laravel, we have to install as well as compile front-end dependencies as below 
    ```sh
    npm install && npm run dev
    ```

1. Execute migrate Artisan command to run all the migrations
    ```
    php artisan migrate
    ```

1. Execute serve Artisan command to run Laravel's local development server 
    ```sh
    php artisan serve
    ```  

1. Visit `http://127.0.0.1:8000/` in your browser to finally view the project.     

1. Click on "Log in" button or visit `http://127.0.0.1:8000/login` in your browser to view the login page.  

 > You have run the project. But, trust me, you have lots to do ahead. Coding is not that difficult. But, generating the required client id and client secret from the OAuth providers can be quite tricky. I have implemented authentication using all of the seven OAuth providers supported by Laravel Socialite and I believe that I can surely be of some help to you. If you have any issues, please feel free to contact me. Also, I will try to write step-by-step process for each of the OAuth providers in the future. 













