import forms from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Plus Jakarta Sans", ...defaultTheme.fontFamily.sans],
                heading: ["Outfit", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    red: "#e62129",
                    blue: "#00a2e9",
                    yellow: "#fef100",
                },
                graylight: "#f9fafb",
                dark: "#1b1b1b",
            },
        },
    },
    plugins: [forms],
};
