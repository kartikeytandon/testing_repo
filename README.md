# CRM Platform

A full-stack CRM application built with Laravel backend and modern frontend.

## Project Structure

```
CRM_module-/
├── backend/                 # Laravel API Backend
│   ├── app/                # Application logic
│   ├── config/             # Configuration files
│   ├── database/           # Migrations, seeders, factories
│   ├── routes/             # API routes
│   ├── storage/            # File storage
│   ├── tests/              # Backend tests
│   ├── artisan             # Laravel CLI
│   ├── composer.json       # PHP dependencies
│   └── render.yaml         # Render deployment config
├── frontend/               # Frontend Assets
│   ├── resources/          # SCSS, JS, views
│   ├── public/             # Built assets
│   ├── package.json        # Node dependencies
│   └── vercel.json         # Vercel deployment config
└── README.md
```

## Deployment

### Backend (Render)
1. Deploy the `backend/` folder to Render
2. Use PHP environment
3. Build command: `composer install --no-dev --optimize-autoloader`
4. Start command: `php artisan serve --host=0.0.0.0 --port=$PORT`

### Frontend (Vercel)
1. Deploy the `frontend/` folder to Vercel
2. Use static build
3. Build command: `npm run build`
4. Output directory: `public/build`

## Development

### Backend
```bash
cd backend
composer install
php artisan serve
```

### Frontend
```bash
cd frontend
npm install
npm run dev
```

## Features

- User Management
- Order Management
- Task Management
- Attendance Tracking
- Sales Reporting
- File Uploads
- Real-time Dashboard