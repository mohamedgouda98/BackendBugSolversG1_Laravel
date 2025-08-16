# Category CRUD API Documentation

## Overview
This document describes the Category CRUD (Create, Read, Update, Delete) API endpoints that have been implemented for the Laravel application.

## Database Schema
The categories table includes the following fields:
- `id` (primary key)
- `name` (string, required)
- `description` (text, nullable)
- `department_id` (foreign key to departments table)
- `created_at` (timestamp)
- `updated_at` (timestamp)

## API Endpoints

### 1. Get All Categories
**Endpoint:** `GET /api/categories`

**Response:**
```json
{
    "status": 200,
    "message": "all categories",
    "errors": null,
    "data": [
        {
            "id": 1,
            "name": "Electronics",
            "description": "Electronic devices and accessories",
            "department_id": 1,
            "department": {
                "id": 1,
                "name": "Technology"
            }
        }
    ]
}
```

### 2. Get Single Category
**Endpoint:** `GET /api/categories/{id}`

**Response:**
```json
{
    "status": 200,
    "message": "category details",
    "errors": null,
    "data": {
        "id": 1,
        "name": "Electronics",
        "description": "Electronic devices and accessories",
        "department_id": 1,
        "department": {
            "id": 1,
            "name": "Technology"
        }
    }
}
```

### 3. Create Category
**Endpoint:** `POST /api/categories`

**Request Body:**
```json
{
    "name": "New Category",
    "description": "Description of the new category",
    "department_id": 1
}
```

**Response:**
```json
{
    "status": 201,
    "message": "category was created successfully",
    "errors": null,
    "data": {
        "id": 2,
        "name": "New Category",
        "description": "Description of the new category",
        "department_id": 1
    }
}
```

### 4. Update Category
**Endpoint:** `PUT /api/categories/{id}`

**Request Body:**
```json
{
    "name": "Updated Category Name",
    "description": "Updated description",
    "department_id": 2
}
```

**Response:**
```json
{
    "status": 200,
    "message": "category updated successfully",
    "errors": null,
    "data": {
        "id": 1,
        "name": "Updated Category Name",
        "description": "Updated description",
        "department_id": 2
    }
}
```

### 5. Delete Category
**Endpoint:** `DELETE /api/categories/{id}`

**Response:**
```json
{
    "status": 200,
    "message": "category deleted successfully",
    "errors": null,
    "data": null
}
```

## Error Responses

### Validation Error (400)
```json
{
    "status": 400,
    "message": "validation error",
    "errors": {
        "name": ["The name field is required."],
        "department_id": ["The selected department id is invalid."]
    },
    "data": null
}
```

### Not Found Error (404)
```json
{
    "status": 404,
    "message": "category not found",
    "errors": null,
    "data": null
}
```

### Server Error (500)
```json
{
    "status": 500,
    "message": "server error",
    "errors": "Error message details",
    "data": null
}
```

## Installation & Setup

1. **Run the migration to add description field:**
   ```bash
   php artisan migrate
   ```

2. **Seed sample data (optional):**
   ```bash
   php artisan db:seed --class=CategorySeeder
   ```

3. **Run tests:**
   ```bash
   php artisan test --filter=CategoryApiTest
   ```

## Files Modified/Created

1. **Migration:** `database/migrations/2025_01_30_200000_add_description_to_categories_table.php`
2. **Model:** `app/Models/Category.php`
3. **Controller:** `app/Http/Controllers/API/CategoriesController.php`
4. **Routes:** `routes/api.php`
5. **Request Validation:** `app/Http/Requests/CategoryRequest.php`
6. **Factory:** `database/factories/CategoryFactory.php`
7. **Seeder:** `database/seeders/CategorySeeder.php`
8. **Tests:** `tests/Feature/CategoryApiTest.php`
9. **Department Factory:** `database/factories/DepartmentFactory.php`

## Backward Compatibility
The legacy routes are maintained for backward compatibility:
- `GET /api/categories` (existing)
- `POST /api/category/create` (existing)

New RESTful routes follow the standard convention:
- `GET /api/categories`
- `POST /api/categories`
- `GET /api/categories/{id}`
- `PUT /api/categories/{id}`
- `DELETE /api/categories/{id}`
