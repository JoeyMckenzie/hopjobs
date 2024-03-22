<template>
    <div class="bg-white py-16 sm:py-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="relative isolate flex flex-col gap-10 overflow-hidden bg-gray-900 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:flex-row xl:items-center xl:py-32"
            >
                <h2
                    class="max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl xl:max-w-none xl:flex-auto"
                >
                    Get notified when we’re launching.
                </h2>
                <form class="w-full max-w-md">
                    <div class="flex gap-x-4">
                        <label class="sr-only" for="email-address"
                            >Email address</label
                        >
                        <input
                            id="email-address"
                            autocomplete="email"
                            class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6"
                            name="email"
                            placeholder="Enter your email"
                            required
                            type="email"
                        />
                        <button
                            class="flex-none rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                            type="submit"
                        >
                            Notify me
                        </button>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-gray-300">
                        We care about your data. Read our
                        <a class="font-semibold text-white" href="#"
                            >privacy&nbsp;policy</a
                        >.
                    </p>
                </form>
                <svg
                    aria-hidden="true"
                    class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2"
                    viewBox="0 0 1024 1024"
                >
                    <circle
                        cx="512"
                        cy="512"
                        fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                        fill-opacity="0.7"
                        r="512"
                    />
                    <defs>
                        <radialGradient
                            id="759c1415-0410-454c-8f7c-9a820de03641"
                            cx="0"
                            cy="0"
                            gradientTransform="translate(512 512) rotate(90) scale(512)"
                            gradientUnits="userSpaceOnUse"
                            r="1"
                        >
                            <stop stop-color="#7775D6" />
                            <stop
                                offset="1"
                                stop-color="#E935C1"
                                stop-opacity="0"
                            />
                        </radialGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</template>
