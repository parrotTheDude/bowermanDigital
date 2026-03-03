#!/bin/bash
set -e

# ──────────────────────────────────────────────
# Bowerman Digital — Production Deploy Script
# ──────────────────────────────────────────────
# Usage:  ssh into server, cd to project root, run:
#         bash deploy.sh
#
# Requirements on server:
#   - PHP 8.2+, Composer, Node 20+, npm
# ──────────────────────────────────────────────

APP_DIR="$(cd "$(dirname "$0")" && pwd)"
cd "$APP_DIR"

echo ""
echo "==> Deploying Bowerman Digital"
echo "    $(date)"
echo ""

# 1. Pull latest code
echo "--- Pulling latest changes..."
git pull origin master

# 2. Install PHP dependencies (no dev, optimised autoloader)
echo "--- Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# 3. Install Node dependencies and build frontend
echo "--- Installing npm dependencies..."
npm ci

echo "--- Building frontend assets..."
npm run build

# 4. Run any new migrations (safe — won't run if nothing pending)
echo "--- Running migrations..."
php artisan migrate --force

# 5. Cache config, routes, views for performance
echo "--- Caching config..."
php artisan config:cache

echo "--- Caching routes..."
php artisan route:cache

echo "--- Caching views..."
php artisan view:cache

echo ""
echo "==> Deploy complete!"
echo ""
