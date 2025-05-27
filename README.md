# Vibe - Event Management Web Application

## Overview

Vibe is a comprehensive web application designed to streamline event planning, management, and attendee engagement. Built with a Laravel backend and modern frontend technologies, this platform provides event organizers with powerful tools to create, manage, and promote events while offering attendees a seamless experience for discovering, registering, and participating in events.

## Features

- **Event Creation & Management**
  - Create and customize event pages with detailed information
  - Manage event schedules, venues, and speakers
  - Track attendance and registrations in real-time
  - Handle multiple event types (conferences, webinars, workshops, etc.)

- **Registration & Ticketing**
  - Customizable registration forms
  - Multiple ticket tiers with varying prices and access levels
  - Discount codes and promotional pricing
  - Secure payment processing integration

- **User Roles & Permissions**
  - Admin dashboard for full system control
  - Organizer tools for event management
  - Attendee profiles with personalized experiences
  <!-- - Speaker management and profiles -->

- **Communication Tools**
  - Automated email notifications
  - Event announcements and updates
  - Attendee messaging system
  - Feedback and survey collection

- **Analytics & Reporting**
  - Attendance metrics and registration analytics
  - Revenue tracking and financial reporting
  - Marketing performance analytics
  - Customizable report generation

## Technology Stack

- **Backend**: Laravel PHP Framework
- **Database**: MySQL
- **Frontend**: "Yet to decide"
<!-- - **Authentication**: Laravel -->
<!-- - **File Storage**: Laravel Storage with AWS S3 option -->
<!-- - **Email Service**: Laravel Mail with SMTP support -->
<!-- - **Payment Processing**: [Your choice - e.g., Stripe, PayPal] -->

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL 5.7 or higher
<!-- - Node.js and NPM -->
<!-- - [Any other specific requirements] -->
<!-- 
## Installation

1. **Clone the repository**
   ```
   git clone https://github.com/yourusername/Vibe.git
   cd Vibe
   ```

2. **Install PHP dependencies**
   ```
   composer install
   ```

3. **Install JavaScript dependencies**
   ```
   npm install
   ```

4. **Configure environment**
   ```
   cp .env.example .env
   php artisan key:generate
   ```

5. **Update the .env file with your database credentials and other configurations**

6. **Run database migrations and seeders**
   ```
   php artisan migrate
   php artisan db:seed
   ```

7. **Build frontend assets**
   ```
   npm run dev
   ```

8. **Start the development server**
   ```
   php artisan serve
   ```

9. **Access the application at http://localhost:8000**

## Configuration

### Database Setup
Configure your database connection in the `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Vibe
DB_USERNAME=root
DB_PASSWORD=
```

### Email Configuration
Set up your email service in the `.env` file:
```
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### Payment Gateway Integration
Set up your payment gateway credentials in the `.env` file:
```
STRIPE_KEY=your_stripe_public_key
STRIPE_SECRET=your_stripe_secret_key
```

## Usage

### Admin Dashboard
Access the admin dashboard at `/admin` with the default administrator credentials:
- Email: admin@example.com
- Password: password

(Remember to change these credentials in production)

### Creating an Event
1. Log in as an organizer or admin
2. Navigate to "Events" > "Create New Event"
3. Fill in the event details, upload images, and configure settings
4. Set up ticket types and pricing
5. Publish the event or save it as a draft

### Managing Registrations
1. Access the event dashboard
2. View the "Registrations" tab
3. Process registrations, send communications, and export data

## Development

### Project Structure
The project follows Laravel's standard MVC architecture with additional modules:
- `/app` - Core application code
- `/resources` - Frontend resources and views
- `/database` - Migrations and seeders
- `/routes` - API and web routes
- `/tests` - Automated tests

### Running Tests
```
php artisan test
```

### Building for Production
```
npm run build
```

## API Documentation

The application provides a RESTful API for integration with mobile apps or third-party services.

Access the API documentation at `/api/documentation` when the application is running.

Key API endpoints include:
- `GET /api/events` - List all public events
- `POST /api/events` - Create a new event (requires authentication)
- `GET /api/events/{id}` - Get specific event details
- `POST /api/registrations` - Register for an event

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the [MIT License](LICENSE.md).

## Support

For support, please contact [your-email@example.com] or open an issue in the GitHub repository.

## Acknowledgements

- [Laravel](https://laravel.com)
- [Your other dependencies and inspirations] -->

## More to come...⌛