import { AxiosInstance } from "axios";
import ziggyRoute from "ziggy-js";

declare global {
    interface Window {
        axios: AxiosInstance;
    }

    // biome-ignore lint/style/noVar: need ziggy globally hoisted
    var route: typeof ziggyRoute;
}
