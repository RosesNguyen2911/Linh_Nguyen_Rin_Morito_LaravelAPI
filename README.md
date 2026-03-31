# 🪄 Harry Potter Movies API – Vue + Laravel Project

## 🧙‍♂️ Overview
This project is a *Vue.js front-end connected to a Laravel API back-end*, designed to display a collection of Harry Potter movies and their characters. Users can explore movies, view detailed information, and filter characters by house.
This project is a *full-stack application* consisting of:

- A *Vue.js frontend* (AJAX-based)
- A *Laravel API backend*

The application allows users to explore Harry Potter movies, view detailed information, and filter characters by Hogwarts house.

---

## 📁 Project Structure

This project is split into two separate repositories:

- 🔹 Frontend (Vue): https://github.com/oiovorin/Linh_Nguyen_Rin_Morito_VueAJAX.git
- 🔹 Backend (Laravel API): https://github.com/RosesNguyen2911/Linh_Nguyen_Rin_Morito_Laravel_API.git

---

## 🚀 Features

### 🎬 Movie Collection
- Fetches movie data from Laravel API
- Displays movie poster and title
- Responsive layout
- Click to view details

### 📖 Movie Details
- Fetches single movie details via API
- Displays:
  - Title
  - Description
  - Release Year
  - Director
  - Characters
- Smooth scrolling + animations (GSAP)

### 🧑‍🎓 Character Collection
- Fetches all characters
- Filter by house:
  - Gryffindor ❤️
  - Slytherin 💚
  - Ravenclaw 💙
  - Hufflepuff 💛

---

## 🛠️ Technologies Used

### 💻 Frontend
- HTML5
- CSS/SCSS (Responsive Design)
- Vue.js (CDN – no .vue files)
- GSAP (Scroll + animation effects)

### 🔙 Backend
- Laravel API
- RESTful endpoints:
  - /api/movies
  - /api/movies/{id}
  - /api/characters
  - /api/characters/{id}

### 🗃️ Database
- MySQL  
- Laravel Migrations  
- Factories & Seeders  

### 🔧 Tools
- GitHub  
- Postman  

---

## 📡 API Endpoints

### 🎬 Movies

| Method | Endpoint | Description |
|--------|--------|-------------|
| GET | /api/movies | Get all movies |
| GET | /api/movies/{id} | Get single movie |
| POST | /api/movies | Create new movie |
| PATCH | /api/movies/{id} | Update movie |
| DELETE | /api/movies/{id} | Delete movie |

---

### 🧑‍🎭 Characters

| Method | Endpoint | Description |
|--------|--------|-------------|
| GET | /api/characters | Get all characters |
| GET | /api/characters/{id} | Get single character |
| POST | /api/characters | Create new character |
| PATCH | /api/characters/{id} | Update character |
| DELETE | /api/characters/{id} | Delete character |

---

## 🔍 Filtering & Search

The API supports search and filtering on listing endpoints.

### Example Queries

- Search by character name:
/api/characters?search=harry
- Filter by release year:
/api/movies?year=2020

---
## ⚙️ Setup Instructions

> ⚠️ Assumptions:
> - You have *Node.js / npm* installed
> - You have *Composer* installed
> - You are familiar with Vue and Laravel basics

---

# 🔙 Backend Setup (Laravel API)

bash
git clone <your-backend-repo-link>
cd backend

- Step 1: Install Laravel dependencies composer install
- Step 2: Create environment file cp .env.example .env
- Step 3: Configure database. Open the .env file and update your database credentials:
bash
DB_HOST=127.0.0.1
DB_PORT=3306        # MAMP: 8889 | WAMP/XAMPP: 3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

- Step 4: Generate application key php artisan key:generate
- Step 5: Run migrations. Run database migrations: php artisan migrate Or reset database and seed data: php artisan migrate:fresh --seed
- Step 6: Start Laravel server php artisan serve. Backend will run at: http://127.0.0.1:8000
- Step 7: Test API endpoints. Open your browser or Postman and test:
bash
http://127.0.0.1:8000/api/movies
http://127.0.0.1:8000/api/characters

---
# 💻 Frontend Setup (Vue)

git clone:  https://github.com/RosesNguyen2911/Linh_Nguyen_Rin_Morito_Laravel_API.git

cd frontend
- Step 1: Install dependencies (if applicable)
npm install
- Step 2: Run development server npm run dev. Frontend will run at: http://localhost:5173

*🔌 API Connection*
Make sure your frontend is calling the correct backend API URL:

http://127.0.0.1:8000/api/movies

Update API URLs in your Vue code if necessary.

---

## ⚙️ Vue Functionality

- Reactive data binding  
- v-for for rendering lists  
- v-if / v-else for:
  - Loading states ⏳  
  - Error handling ⚠️  

### Methods
- getMovies()  
- getMovie(id)  
- getCharacters()  
- filterHouse()  

---

## 🎨 GSAP Enhancements

- Smooth scroll to movie details  
- Animated movie detail box  
- Staggered character animations  
- Section-based scroll animations  

---

## 📱 Responsive Design

- Mobile-first approach  
- Tablet and Desktop breakpoints  
- Grid + Flexbox layout  
- Adaptive spacing and sizing  

---

## ❗ Error Handling

- Handles failed API requests  
- Displays user-friendly error messages  
- Loading indicators for better UX  

---

## 📌 Assignment Requirements Covered

- Vue instance (single HTML file)  
- First API call (movies list)  
- Second API call (movie details)  
- Populate list dynamically  
- Display details without page reload  
- Error handling + loading states  
- Responsive design  
- GSAP enhancements  
- Full frontend + backend integration  

---

## 👨‍💻 Authors

- Linh Nguyen  
- Rin Morito  

---

## 🏁 Final Notes

This project demonstrates a complete *frontend + API integration workflow*, combining Vue.js reactivity, Laravel backend, and GSAP animations to create an interactive user experience.