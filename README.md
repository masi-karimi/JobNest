# 💼 JobNest 🐦

A feature-rich **Job Portal** built with **Laravel** and **Blade**.  
JobNest is designed as a traditional **Multi-Page Application (MPA)**, where the backend directly returns Blade views instead of JSON APIs.

---

## ✨ **Features**

- User registration & authentication
- Explore jobs by:
  - Category
  - Job type
  - Location
  - Keyword search
  - Years of experience
  - Posting time
- Save jobs & manage saved listings
- Apply to jobs with a single click
- View & edit user profile
- Create, edit, and manage job listings (any registered user can post jobs)
- Track applications to your posted jobs
- Seeder data to get quickly started

---

## ⚙️ **Technology Stack**

- **Framework:** Laravel
- **Templating:** Blade
- **Database:** MySQL
- **Frontend:** HTML, CSS, Bootstrap, jQuery

---

## 🏛 **Architecture**

JobNest is built as a **traditional server-rendered Laravel MPA**:
- The backend returns **Blade views directly**
- No REST APIs or JSON endpoints
- Not intended for dedicated SPA frameworks (React, Vue, Angular)
- Not suitable as a backend for mobile apps

This approach keeps the stack simple, reliable, and easy to deploy.

---

## 🚀 **Getting Started**

1. Clone the repository:
   ```bash
   git clone https://github.com/masi-karimi/JobNest.git
   cd JobNest
   ```
2. Install dependencies:
   ```bash
   composer install
   ```

3. Copy `.env.example` to `.env` and configure your database settings.
   ```bash
   cp .env.example .env
   ```

4. Generate the app key:
   ```bash
   php artisan key:generate
   ```

5. Run migrations & seeders:
   ```bash
   php artisan migrate --seed
   ```

6. Serve the app locally:
   ```bash
   php artisan serve
   ```

---

## 📝 License

This project is **open-source** and available under the **MIT License**.

---

## 👍🏻 Acknowledgements

Built as a practical Laravel learning project & job portal template. Thanks to the Laravel community for documentation, inspiration, and support!

---

## ✏️ Contributing

Feel free to fork the repository and submit pull requests!  
If you'd like to add new features (e.g., REST APIs or SPA support), please open an issue to discuss your ideas first.
