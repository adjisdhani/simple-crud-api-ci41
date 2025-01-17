# Simple Codeigniter 4.1.x CRUD API

This is a simple Codeigniter 4.1.x CRUD API project for managing a collection of lecturers. It demonstrates basic CRUD operations, including creating, reading, updating, and deleting data, with endpoints accessible via RESTful API.

## Features
- View all lecturers (GET `/lecturers`)
- View a single lecturers by ID (GET `/lecturers/(:num)`)
- Create a new lecturers (POST `/lecturers`)
- Update a lecturers (PUT `/lecturers/(:num)`)
- Delete a lecturers (DELETE `/lecturers/(:num)`)

## Requirements
- PHP 7.4 or higher
- Composer
- Codeigniter 4.1.x
- MySQL or MariaDB

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/adjisdhani/simple-crud-api-ci41.git
   ```

2. **Navigate to the project directory**:
   ```bash
   cd simple-crud-api-ci41
   ```

3. **Install dependencies**:
   ```bash
   composer install
   ```

4. **Configure the database file (app/config/Database.php)**:
   ```bash
   public array $default = [
        'DSN'          => '',
        'hostname'     => 'localhost',
        'username'     => 'yourusername',
        'password'     => '',
        'database'     => 'yourdatabase',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'charset your database',
        'DBCollat'     => 'dbcollate your database',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
    ];
   ```

5. **Run the database migrations**:
   ```bash
    php spark migrate
   ```

6. **Start the development server**:
   ```bash
    php spark serve
   ```

7. **Access the API**:
   (http://localhost:8080/lecturers)

      ## API Endpoints 
    
    **1. Get All lecturers**

    - Method: GET
    - Endpoint: /lecturers
    - Description: Retrieve a list of all lecturers.

    **Example Response**:
   ```bash
   [
	    {
		    "id": 1,
		    "name": "Alyson Heller",
		    "email": "adaniel@gmail.com",
		    "department": "omnis",
		    "created_at": "2025-01-14 14:12:57",
		    "updated_at": "2025-01-14 15:20:59"
		}

	]
   ```
    
    **2. Get a Single Lecturers by ID**
    
    - Method: GET
    - Endpoint: /lecturers/(:num)
    - Description: Retrieve a single lecturers by its ID.

    **Example Response**:
   ```bash
   [
	    {
		    "id": 1,
		    "name": "Alyson Heller",
		    "email": "adaniel@gmail.com",
		    "department": "omnis",
		    "created_at": "2025-01-14 14:12:57",
		    "updated_at": "2025-01-14 15:20:59"
		}
	]
   ```
    
    **3. Create a New Lecturers**
    
    - Method: POST
    - Endpoint: /lecturers
    - <b>Body Parameters:</b>
      1. name (string, required)
      2. email (string, required)
      3. department (string, required)

    **Example Request**:
    ```bash
    [
        {
		  "name": "Data Testing4",
		  "email": "datatesting@datatesting.com4",
		  "department": "Computer Science Testing4"
		}

    ]
    ```
    **Example Response**:
   ```bash
   [
	    {
		    "status": 201,
		    "message": "Lecturer successfully created"
		}
	]
   ```
    **4. Update a Lecturers**
    
    - Method: PUT
    - Endpoint: /lecturers/(:num)
    - <b>Body Parameters:</b>
      1. name (string, required)
      2. email (string, required)
      3. department (string, required)

    **Example Request**:
   ```bash
   [
	    {
		  "name": "Data Testing4 (updated)",
		  "email": "datatesting@datatesting.com4 (updated)",
		  "department": "Computer Science Testing4 (updated)"
		}

	]
   ```
    **Example Response**:
   ```bash
   [
	    {
		    "status": 200,
		    "message": "Lecturer successfully updated"
		}
	]
   ```
    **4. Delete a Content**
    
    - Method: DELETE
    - Endpoint: /api/posts/{id}
    
    **Example Response**:
   ```bash
   [
	    {
		    "status": 200,
		    "message": "Lecturer successfully deleted"
		}
	]
   ```
    ## Author
    Adjis Ramadhani Utomo

    ## License
    This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).