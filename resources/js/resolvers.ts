import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { DefineComponent } from 'vue';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

export function titleResolver(title: string) {
    return `${title} | ${appName}`;
}

export function componentResolver(name: string) {
    return resolvePageComponent(
        `./Pages/${name}.vue`,
        import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
    );
}
