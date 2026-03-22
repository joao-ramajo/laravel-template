FROM node:22-alpine AS frontend

WORKDIR /app

COPY package.json package-lock.json* ./

RUN if [ -f package-lock.json ]; then npm ci; else npm install; fi

COPY resources resources
COPY public public
COPY vite.config.js ./

RUN npm run build

FROM nginx:alpine

WORKDIR /var/www

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY public /var/www/public
COPY --from=frontend /app/public/build /var/www/public/build

RUN mkdir -p /var/www/storage/app/public
