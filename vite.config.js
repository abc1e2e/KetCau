import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    // server: {
    //     hmr: {
    //         host: 'localhost', // Thay đổi host nếu cần, có thể sử dụng địa chỉ IP khác
    //         port: 5173, // Đảm bảo cổng này không bị xung đột
    //         protocol: 'ws', // Sử dụng WebSocket không bảo mật nếu cần
    //     },
        
    //     host: '0.0.0.0', // Để lắng nghe trên tất cả các địa chỉ IP của máy
    // },
    // base: '/build/assets/',
});
