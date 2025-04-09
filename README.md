<p align="center">
  <h1 align="center">uHustle CRM</h1>
  <p align="center">Enterprise-Grade Lead & Client Management System</p>
</p>

<div align="center">
  <img src="https://img.shields.io/badge/Laravel-5.8-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-7.1+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Stripe-Payments-008CDD?style=for-the-badge&logo=stripe&logoColor=white" alt="Stripe">
  <img src="https://img.shields.io/badge/Twilio-Communications-F22F46?style=for-the-badge&logo=twilio&logoColor=white" alt="Twilio">
</div>

> **IMPORTANT NOTICE**: This repository has been published with permission as the startup that built it is no longer operational. Copying any code or repurposing it for commercial purposes is strictly prohibited.

## 🌟 System Overview

uHustle CRM is a comprehensive enterprise resource planning system that demonstrates advanced Laravel development practices and architectural patterns. The system integrates lead management, client relationships, task tracking, and product management into a cohesive platform.

### 🏗 Architecture Highlights

#### Domain Models & Relationships
- **Lead Management**: Sophisticated lead tracking with source attribution, status workflows, and conversion analytics
- **Client Management**: Comprehensive client profiles with relationship mapping and interaction history
- **Task System**: Flexible task management with deadline tracking and team assignment capabilities
- **Product Catalog**: Complete product management with inventory tracking and supplier relationships
- **Activity Logging**: Detailed audit trails using Laravel's event system and the `owen-it/laravel-auditing` package

#### Technical Features
- **Event-Driven Architecture**: Utilizing Laravel's event system for decoupled business logic
- **Polymorphic Relationships**: Advanced Eloquent relationships for comments and activities
- **Service Integration**: Seamless integration with Stripe for payments and Twilio for communications
- **Role-Based Access Control**: Granular permissions system for enterprise-level security
- **API Architecture**: RESTful API endpoints with proper resource management

## 🔧 Core Components

### Lead Management
```php
class Lead extends Model
{
    // Advanced lead tracking with comprehensive attribute management
    protected $fillable = [
        'source', 'title', 'name', 'surname', 'phone_number', 'email',
        'age', 'gender', 'city', 'country', 'account', 'rating',
        'user_assigned', 'user_created_id', 'is_client', 'product_id',
        'product_variant', 'status', 'start_date', 'expires_at',
        'trans_num', 'total',
    ];

    // Sophisticated relationship mapping
    public function user() {
        return $this->belongsTo(User::class, 'user_assigned');
    }
    
    public function activity() {
        return $this->morphMany(Activity::class, 'source');
    }
}
```

### Task Management
```php
class Task extends Model
{
    // Comprehensive task tracking system
    protected $fillable = [
        'title', 'description', 'status', 'user_assigned_id',
        'user_created_id', 'client_id', 'deadline', 'time'
    ];
    
    // Advanced date handling with Carbon
    public function getDaysUntilDeadlineAttribute() {
        return Carbon::now()->startOfDay()
            ->diffInDays($this->deadline, false);
    }
}
```

### Product Management
```php
class Product extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    // Enterprise-grade product tracking
    protected $fillable = [
        'supplier_id', 'category_id', 'origin_type_id', 'origin_id',
        'part_code', 'model_number', 'name', 'description',
        'unit_cost', 'rate', 'current_stock', 'reserved_stock',
        'available_stock', 'tax_type', 'status',
    ];
}
```

## 🚀 Technical Stack

- **Framework**: Laravel 5.8
- **Database**: MySQL with advanced Eloquent ORM usage
- **External Services**:
  - Stripe for payment processing
  - Twilio for communication services
  - DomPDF for document generation
- **Development Tools**:
  - PHPUnit for testing
  - Laravel Dump Server for debugging
  - Whoops for error handling

## 🔐 Security Features

- **Authentication**: Advanced Laravel authentication system
- **Authorization**: Role-based access control with granular permissions
- **Data Protection**: Input validation and sanitization
- **Audit Logging**: Comprehensive activity tracking
- **API Security**: Token-based authentication for API endpoints

## 🛠 Development Setup

```bash
# Clone the repository
git clone [repository-url]

# Install PHP dependencies
composer install

# Set up environment file
cp .env.example .env
php artisan key:generate

# Run migrations and seed the database
php artisan migrate --seed

# Install development dependencies
npm install
npm run dev

# Start the development server
php artisan serve
```

## 📚 Documentation

Comprehensive documentation was maintained throughout development, covering:
- API Endpoints
- Database Schema
- Business Logic
- Integration Points
- Deployment Procedures

## 🤝 Contributing

While this project is no longer in active development, it serves as a reference implementation of enterprise-grade Laravel development practices.

## 📜 License

This codebase is published for reference purposes only. All rights reserved. Commercial use or redistribution is strictly prohibited.

---

<p align="center">
  Developed with ❤️ by <a href="https://github.com/antonga23">Alatha</a><br>
</p>
