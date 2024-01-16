default: pail

# install dependencies for React and Laravel
dev:
    pnpm run dev & php artisan serve

# install dependencies for React and Laravel
install:
    pnpm install & composer install

# runs tail logging
pail:
    php artisan pail

# runs the ssr server
ssr:
    pnpm run build && php artisan inertia:start-ssr

# continuously runs lint on file change
lint-php:
    fswatch -o app | xargs -I{} composer run lint

# continuously runs lint on file change
lint-react:
    fswatch -o resources/js | xargs -I{} pnpm run lint
