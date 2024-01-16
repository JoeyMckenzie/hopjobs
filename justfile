default: pail

# install dependencies for React and Laravel
dev:
    pnpm run dev & php artisan serve

# install dependencies for React and Laravel
install:
    rm -rf node_modules pnpm-lock.yaml && pnpm install & composer install

# runs tail logging
pail:
    php artisan pail

# runs the ssr server
ssr:
    pnpm run build && php artisan inertia:start-ssr
