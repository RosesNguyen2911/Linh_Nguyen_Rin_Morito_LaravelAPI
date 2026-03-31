# 🎬 RESTful API Project – Laravel (Harry Potter Movies & Characters API) 🚀

Welcome to our **RESTful Laravel API project**!  
This project was developed to demonstrate backend development skills using **Laravel**, focusing on **API design, database structure, and REST conventions**.

This API allows users to interact with two resources: Harry Potter **Movies** and **Characters**, including full **CRUD operations**, filtering, and search functionality.

---

## 📋 Table of Contents
- [About](#about)
- [Movies API](#movies-api)
- [Characters API](#characters-api)
- [API Endpoints](#api-endpoints)
- [Filtering & Search](#filtering--search)
- [Technologies & Tools](#technologies--tools)
- [Database Structure](#database-structure)
- [Collaboration Workflow](#collaboration-workflow)

---

## 👩🏻‍💻 About
This project demonstrates how to build a **RESTful API using Laravel**.

The goal was to:
- Design structured database relationships  
- Implement RESTful endpoints (CRUD)  
- Enable dynamic filtering and searching  
- Work collaboratively using GitHub pull requests  

---

### 🎬 Movies API
Represents movie data such as:
- Title  
- Description
- Director  
- Release Year    
- image_url

### 🧑‍🎭 Characters API
Represents characters appearing in movies:
- Name  
- house 
- Associated Movie
- image_url  

---

## ✨ Features

- 🚀 Full CRUD Operations (Create, Read, Update, Delete)  
- 🔍 Search functionality  
- 🎯 Filtering system
- 🔗 Relational data between movies and characters  
- 🧪 Database seeded with factories  
- 🤝 Team collaboration using pull requests  

---

## 📡 API Endpoints

### 🎬 Movies

| Method | Endpoint | Description |
|--------|--------|-------------|
| GET | `/api/movies` | Get all movies |
| GET | `/api/movies/{id}` | Get single movie |
| POST | `/api/movies` | Create new movie |
| PATCH | `/api/movies/{id}` | Update movie |
| DELETE | `/api/movies/{id}` | Delete movie |

---

### 🧑‍🎭 Characters

| Method | Endpoint | Description |
|--------|--------|-------------|
| GET | `/api/characters` | Get all characters |
| GET | `/api/characters/{id}` | Get single character |
| POST | `/api/characters` | Create new character |
| PATCH | `/api/characters/{id}` | Update character |
| DELETE | `/api/characters/{id}` | Delete character |

---

## 🔍 Filtering & Search

The API supports search and filtering on listing endpoints.

### Example Queries

- Search by character name:
/api/characters?search=harry
- Filter by release year:
/api/movies?year=2020

---

## 🛠️ Technologies & Tools

### Backend
- Laravel  
- PHP  
- REST API  

### Database
- MySQL  
- Laravel Migrations  
- Factories & Seeders  

### Tools
- GitHub  
- Postman  

---

## 🧩 Database Structure

Tables:
- `movies`  
- `characters`  

Includes:
- Migrations for schema  
- Factories for test data  
- Seeders for database population  

---

## 🤝 Collaboration 
This project is developed by
- [Rin Morito](https://www.linkedin.com/in/rin-morito-7b9868329)
- [Linh Nguyen](linkedin.com/in/linhnguyenstudio)



**Thank you for visiting project!**