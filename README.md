# eCommerce

[![CI](https://github.com/FN-Devhub/eCommerce/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/FN-Devhub/eCommerce/actions/workflows/ci.yml) [![Release](https://img.shields.io/github/v/release/FN-Devhub/eCommerce?include_prereleases&label=release)](https://github.com/FN-Devhub/eCommerce/releases)


> متجر إلكتروني تعليمي متعدد اللغات والعملات يركّز على السرعة وتجربة البحث.  
Educational multilingual & multi-currency e-commerce project focused on performance, search, and clean architecture.

---

## Overview
This repository contains a clean public history on the `main` branch.  
The previous state has been preserved under the archive branch:

- **Archive branch:** `archive/2025-10-30-initial-state`
- **Tag:** `archive-initial-2025-10-30`

### What this project demonstrates
- Faceted product discovery (category, price, attributes)
- High-quality PDP (gallery, size guide, specs, reviews)
- Smooth cart & guest checkout
- Internationalization (i18n) and multi-currency pricing
- Core Web Vitals-minded frontend (lazy images, modern formats)
- Secure backend basics (hashed passwords, env secrets, audit logs)

---

## Demo & Media
- **Screenshots:** see [`/docs/screenshots`](./docs/screenshots) (add your PNGs/JPGs here).
- **Short demo video (optional):** link to YouTube/Drive once available.

---

## Tech Stack (suggested)
- **Backend:** PHP (Laravel) or Node.js (Express/Nest)
- **Database:** MySQL/MariaDB
- **Cache/Session:** Redis
- **Search (optional):** Meilisearch or Elasticsearch
- **Frontend:** Blade / Vue / React (Next.js)
- **Build:** NPM / Vite
- **Infra (optional):** Docker, GitHub Actions CI

> Note: Adjust this list to match the actual codebase as it evolves.

---

## Getting Started

### Prerequisites
- Node.js 18+ and NPM
- PHP 8.2+ & Composer (if using Laravel)
- MySQL 8+ (or MariaDB 10.6+)
- Redis (optional, for sessions/cache)
- Meilisearch/Elasticsearch (optional, for search facets)

### 1) Environment
Copy the sample env file and fill values:

**Windows**
```bat
copy .env.example .env
