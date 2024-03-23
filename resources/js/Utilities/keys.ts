import type { InjectionKey, Ref } from 'vue';

export type MobileMenuState = {
    mobileMenuOpen: Ref<boolean>;
    toggleMenu: () => boolean;
};

export const mobileMenuInjectionKey = Symbol() as InjectionKey<{
    mobileMenuOpen: Ref<boolean>;
    toggleMenu: () => boolean;
}>;
