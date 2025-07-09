import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { glob } from 'glob';

/**
 * Get Files from a directory
 * @param {string} query
 * @returns array
 */
function GetFilesArray(query) {
    return glob.sync(query);
}

// Processing Vendor JS Files
const VendorJsFile = GetFilesArray('resources/assets/vendor/**/*.js');

// Processing Vendor Css Files
const VendorScssFile = GetFilesArray('resources/assets/vendor/**/*.scss');
const VendorCssFile = GetFilesArray('resources/assets/vendor/**/*.css');


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                ...VendorJsFile,
                ...VendorScssFile,
                ...VendorCssFile,
            ],
            refresh: true,
            detectTls:false,
        }),
    ],
});
