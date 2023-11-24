<?php

return [
    /*
    |--------------------------------------------------------------------------
    | DeepL API Key
    |--------------------------------------------------------------------------
    |
    | This is the API key for the DeepL API. You can get it from your Deepl Account
    | https://www.deepl.com/de/account/summary
    | It is recommended to store it in the .env file.
    |
     */
    "deepl_api_key" => env('DEEPL_API_KEY'),

    /*
     * --------------------------------------------------------------------------
     * Supported Languages
     * --------------------------------------------------------------------------
     *
     * This is an array of supported languages. You don't have to add your default
     * or fallback language here. DeepLy will add it automatically.
     *
     */
    "supported_languages" => [],

    /*
     * --------------------------------------------------------------------------
     * Enable Cache
     * --------------------------------------------------------------------------
     *
     * This is a boolean value that determines if the translations should be
     * cached. It is recommended to enable caching for saving api credits and
     * for performance reasons.
     *
     */
    "enable_cache" => true,


    /*
     * --------------------------------------------------------------------------
     * Cache Duration
     * --------------------------------------------------------------------------
     *
     * This is the duration in minutes for which the translations will be cached
     * by default. You can override the default on a per-request basis.
     *
     * 1 day = 1440 minutes
     * 1 week = 10'080 minutes
     * 1 month = 43'200 minutes
     *
     */
    "cache_duration" => 1440,
];
