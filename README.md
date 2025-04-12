# 🌾 Farm Platform – Tool Rental Management System

**Farm Platform** is a Laravel-based web application that connects **farm equipment owners (renters)** with **farmers or individuals (rentees)** who need to rent those tools.

Whether you're a farmer looking to rent a tractor for harvest or an equipment owner offering services, this platform bridges that gap — easily, securely, and efficiently.

---

## 👥 User Roles

### 🧑‍🌾 Rentee (Farmer/User)
- Can browse available farm equipment.
- Can request to rent a tool for specific dates.
- Views rental history and request status.
- Has their own dashboard.

### 🛠 Renter (Tool Owner)
- Can list tools and equipment for rent.
- Sets availability, pricing, and tool descriptions.
- Manages incoming rental requests.
- Tracks rentals, earnings, and listings via dashboard.

### 🧑‍💼 Admin
- Manages platform-wide data and users.
- Handles category/tool moderation.
- Views reports, analytics, and platform performance.

---

## 🔑 Key Features

- 🗂 Tool listing by renters (with images, descriptions, rates)
- 🔍 Rentee search and filter tools
- 📅 Rental request system with date selection
- ✅ Approval flow for rental requests
- 📊 Separate dashboards for each user role
- 🛡 Role-based authentication (`admin`, `renter`, `rentee`)
- 🌐 Clean UI for mobile and desktop users

---

## 🧰 Tech Stack

- **Backend:** Laravel 10+
- **Frontend:** Blade, Bootstrap (custom styling)
- **Database:** MySQL
- **Authentication:** Laravel Breeze or Fortify (role-based guards)
- **File Uploads:** Local filesystem (can be extended to S3)
- **Dev Tools:** Laragon, HeidiSQL, Laravel Debugbar, Ignition

---

## 🚀 Getting Started

```bash
git clone git@github.com:Ela-El-maker/Farm-Listing.git
cd farm-platform

# Install dependencies
composer install
npm install && npm run dev

# Set up environment
cp .env.example .env
php artisan key:generate

# Migrate and seed
php artisan migrate --seed

# Serve the app
php artisan serve
