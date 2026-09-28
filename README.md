# Quiz System

A web-based Quiz Management System built with Laravel. This project allows users to register, attempt quizzes, answer MCQ questions, track quiz attempts, and receive a certificate after successfully completing a quiz.

## 🚀 Features

* 👤 User Registration and Login
* 📝 Quiz Management
* ❓ Multiple Choice Questions (MCQ)
* 🎯 Online Quiz Attempt
* 📊 Quiz Attempt Records
* 🏆 Quiz Completion Certificate
* 📜 Download Certificate
* 🔐 User Authentication
* 📱 Responsive User Interface

## 🛠️ Technologies Used

* PHP
* Laravel
* MySQL
* Blade
* Tailwind CSS
* Vite
* JavaScript
* HTML5
* CSS3

## 📂 Project Structure

```text
Quiz_System/
│
├── app/
│   ├── Http/
│   ├── Models/
│   └── ...
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│
├── routes/
│   └── web.php
│
├── tests/
│   ├── Feature/
│   └── Unit/
│
├── public/
├── storage/
├── composer.json
├── package.json
└── README.md
```

## ⚙️ Installation

### 1. Clone the Repository

```bash
git clone https://github.com/Sanjoy011/Quiz_System.git
```

### 2. Go to the Project Directory

```bash
cd Quiz_System
```

### 3. Install PHP Dependencies

```bash
composer install
```

### 4. Install Frontend Dependencies

```bash
npm install
```

### 5. Create Environment File

```bash
cp .env.example .env
```

For Windows, you can also create a copy of `.env.example` and rename it to:

```text
.env
```

### 6. Generate Application Key

```bash
php artisan key:generate
```

### 7. Configure Database

Open the `.env` file and configure your MySQL database:

```env
DB_DATABASE=quiz_system
DB_USERNAME=root
DB_PASSWORD=
```

Create the database in MySQL before running the migrations.

### 8. Run Migrations

```bash
php artisan migrate
```

### 9. Start Laravel Server

```bash
php artisan serve
```

The application will be available at:

```text
http://127.0.0.1:8000
```

### 10. Run Vite

In another terminal:

```bash
npm run dev
```

## 🧪 Testing

Run the Laravel test suite with:

```bash
php artisan test
```

## 🎯 Project Purpose

This project was developed to practice Laravel, PHP, database management, authentication, CRUD operations, Blade templating, and building an interactive quiz application.

## 🔮 Future Improvements

* Timer-based quizzes
* Quiz categories
* Difficulty levels
* Admin dashboard
* Question randomization
* Score ranking / leaderboard
* Improved certificate design
* API integration

## 👨‍💻 Author

**Sanjoy**

GitHub: [@Sanjoy011](https://github.com/Sanjoy011)

## 📄 License

This project is created for learning and educational purposes.
