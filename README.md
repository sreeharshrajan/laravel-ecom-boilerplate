# 🛒 Laravel E-Commerce Platform

A modern, scalable, and enterprise-grade e-commerce solution built with Laravel 12 and PHP 8.3+. 

## ✨ Features

### 🏗️ **Core Architecture**
- ✅ **Laravel 12** (PHP 8.3+)
- ✅ **Modular & Enterprise-grade Code Structure**
- ✅ **Scalable Database Schema**
- ✅ **Custom-built Frontend & Admin Panel**

### 👨‍💼 **Admin Management**
- ✅ **Admin Panel with Role-Based Access Control (RBAC)**
- ✅ **Category & Brand Management**
- ✅ **Product Attributes & Variations**
- ✅ **CMS (Pages, Blogs, Contact)**

### 🛍️ **Product Management**
- ✅ **Simple & Variant Product Support**
- ✅ **Product Attributes & Variations**
- ✅ **Category & Brand Management**

### 🛒 **Shopping Experience**
- ✅ **Cart, Checkout, and Order Management**
- ✅ **Custom-built Customer Frontend**
- ✅ **User Profile, Addresses, Wishlist**

### 🌐 **SEO & Internationalization**
- ✅ **SEO & Multi-language Ready (optional)**

## 🚀 Quick Start

### Prerequisites
- PHP 8.3 or higher
- Composer
- MySQL/PostgreSQL
- Node.js & NPM (for frontend assets)

### Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd ecom-boilerplate
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   ```bash
   # Update .env file with your database credentials
   php artisan migrate
   php artisan db:seed
   ```

6. **Build frontend assets**
   ```bash
   npm run build
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

## 📁 Project Structure

```
ecom/
├── app/
│   ├── Http/Controllers/    # Application controllers
│   ├── Models/             # Eloquent models
│   └── Providers/          # Service providers
├── database/
│   ├── migrations/         # Database migrations
│   ├── seeders/           # Database seeders
│   └── factories/         # Model factories
├── resources/
│   ├── views/             # Blade templates
│   ├── css/              # Stylesheets
│   └── js/               # JavaScript files
├── routes/                # Route definitions
└── config/               # Configuration files
```

## 🔧 Configuration

### Database Configuration
Update your `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Mail Configuration
Configure your mail settings for order notifications:
```env
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
```

## 🛠️ Development

### Running Tests
```bash
php artisan test
```

### Code Quality
```bash
# Run PHP CS Fixer
./vendor/bin/php-cs-fixer fix

# Run PHPStan
./vendor/bin/phpstan analyse
```

### Database Management
```bash
# Create a new migration
php artisan make:migration create_products_table

# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Seed database
php artisan db:seed
```

## 🎨 Frontend Architecture

The platform features a **completely custom-built frontend** with:
- **Custom Blade Templates** - No pre-built templates or themes
- **Vanilla JavaScript** - No heavy frameworks, optimized performance
- **Custom CSS/SCSS** - Tailored styling without external UI libraries
- **Responsive Design** - Mobile-first approach
- **Progressive Enhancement** - Works without JavaScript

## 🎨 Frontend Customization

### Custom Blade Templates
All frontend templates are custom-built using Laravel Blade, located in `resources/views/`:
- **Customer Views**: `resources/views/customer/`
- **Admin Views**: `resources/views/admin/`
- **Layouts**: `resources/views/layouts/`
- **Components**: `resources/views/components/`

### Custom JavaScript & CSS
- **JavaScript**: Custom vanilla JS in `resources/js/`
- **Stylesheets**: Custom SCSS in `resources/scss/`

## 🔐 Security Features

- **Role-Based Access Control (RBAC)**
- **CSRF Protection**
- **SQL Injection Prevention**
- **XSS Protection**
- **Secure File Uploads**
- **Input Validation & Sanitization**

## 📦 Deployment

### Production Checklist
- [ ] Set `APP_ENV=production` in `.env`
- [ ] Configure production database
- [ ] Set up SSL certificate
- [ ] Configure caching (Redis/Memcached)
- [ ] Set up queue workers
- [ ] Configure file storage (S3/CloudFront)
- [ ] Set up monitoring and logging

### Deployment Commands
```bash
# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force

# Start queue workers
php artisan queue:work
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

- **Documentation**: [Wiki](link-to-wiki)
- **Issues**: [GitHub Issues](link-to-issues)
- **Discussions**: [GitHub Discussions](link-to-discussions)

## 🙏 Acknowledgments

- Built with [Laravel](https://laravel.com/)
- Designed for optimal performance and maintainability

---

**Made with ❤️ for the Laravel community**
