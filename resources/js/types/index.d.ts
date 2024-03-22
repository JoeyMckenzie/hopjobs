import { Config } from 'ziggy-js';

export type User = {
    id: number;
    name: string;
    email: string;
    email_verified_at: string;
};

export type JobListing = {
    id: string;
    url: string;
}

export type PageProps<
    T extends Record<string, unknown> = Record<string, unknown>,
> = T & {
    auth: {
        user: User;
    };
    ziggy: Config & { location: string };
};
