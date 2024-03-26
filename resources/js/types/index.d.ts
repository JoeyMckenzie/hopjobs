import { Config } from 'ziggy-js';

export type User = {
    id: number;
    name: string;
    email: string;
    email_verified_at: string;
};

export type JobListing = {
    id: number;
    title: string;
    description: string;
    listing_url: string;
    company: string;
    company_website_url?: string;
    company_logo?: string;
    pay_start?: number;
    pay_end?: number;
    pay_type?: string;
    status: string;
    listing_type: string;
};

export type PageProps<
    T extends Record<string, unknown> = Record<string, unknown>,
> = T & {
    auth: {
        user: User;
    };
    ziggy: Config & { location: string };
    flash?: {
        message: string;
    };
};
