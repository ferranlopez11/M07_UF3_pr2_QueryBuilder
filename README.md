# **Analysis**

## **1. Routes**
- **1.1.** What are they and their purpose?
Routes are the defined paths that map HTTP requests to specific controller actions. Their purpose is to handle user requests and return appropriate responses or views.

- **1.2.** Where are they defined?
In routes/web.php file

- **1.3.** How many are there?
GET /: Displays the welcome page.
POST /filmin/createFilm: Handles the form submission to register a new film.
GET /filmin/list: Displays the list of registered films.

- **1.4.** How do they group?  
Routes related to films are grouped using the prefix option with filmin.

- **1.5.** Which prefix do they use?  
filmin

- **1.6.** Which parameters do they use?  
The POST route uses parameters from the request body:
name
year
genre
country
duration
url_image

## **2. Middleware**
- **2.1.** What are they and their purpose?  
Middleware are layers that process HTTP requests before they reach the controller. They are used to validate data, handle authentication, or enforce specific application rules.

- **2.2.** Where are they defined?  
In app/Http/Middleware directory

- **2.3.** How many are there?  
ValidateUrl: Validates the URL provided in the form to ensure it's valid.

- **2.4.** Which parameters do they use?  
url_image parameter to check if the URL is valid.

- **2.5.** When are they invoked?  
Before the createFilm route is executed.

## **3. Data**
- **3.1.** Where are they defined?  
In a JSON file located in the storage directory, storage/app/films.json

- **3.2.** How are they read?  
Is read using the Storage::get() function and parsed into a PHP array for manipulation.

## **4. Controller**
- **4.1.** What are they and their purpose?  
Are responsible for handling requests, processing logic, and returning responses. They separate business logic from route definitions.

- **4.2.** Where are they defined?  
In the app/Http/Controllers directory.

- **4.3.** How many are there?  
FilmController: Handles the creation of films, validation, and listing of existing films.

## **5. View**
- **5.1.** What are they and their purpose?  
Are Blade templates used to render HTML pages dynamically. Their purpose is to present data to the user in a structured format.

- **5.2.** Where are they defined?  
In the resources/views directory.

- **5.3.** How many are there?  
welcome.blade.php: Displays the form and links for different film categories.
list.blade.php: Displays a list of all registered films.
error.blade.php (optional): Displays error messages if something goes wrong.

---

## **Implementation Enhancements Opened as Issues**
For more details, check out the [issues here](https://github.com/Stucom-Pelai/M07_UF2_Laravel/issues).
