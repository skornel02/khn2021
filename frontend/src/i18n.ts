import i18n from "i18next";
import { initReactI18next } from "react-i18next";

import Backend from "i18next-http-backend";
import LanguageDetector from "i18next-browser-languagedetector";
import translationEN from "./Resources/Locales/en.json";
import translationHU from "./Resources/Locales/hu.json";

const resources = {
    en: {
        translation: translationEN,
    },
    hu: {
        translation: translationHU,
    },
};

i18n
    // load translation using http -> see /public/locales (i.e. https://github.com/i18next/react-i18next/tree/master/example/react/public/locales)
    // learn more: https://github.com/i18next/i18next-http-backend
    .use(Backend)
    // detect user language
    // learn more: https://github.com/i18next/i18next-browser-languageDetector
    .use(LanguageDetector)
    // pass the i18n instance to react-i18next.
    .use(initReactI18next)
    //.use(emoji)
    // init i18next
    // for all options read: https://www.i18next.com/overview/configuration-options
    .init({
        resources,
        fallbackLng: "hu",
        debug: process.env.NODE_ENV === "development",
        interpolation: {
            format: function (value, format, lng) {
                if (format === "lowercase" && typeof value === "string") return value.toLowerCase();
                if (format === "sentencecase") return value.charAt(0).toUpperCase() + value.slice(1).toLowerCase();
                return value;
            },
            escapeValue: false, // not needed for react as it escapes by default
        },
        //postProcess: "emoji"
    });

export default i18n;
