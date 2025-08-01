import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
        react({ jsxRuntime: 'automatic' }),
    ],
    optimizeDeps: {
        exclude: ['@mui/material/styles', '@mui/material/Box', '@mui/material/Drawer', '@mui/material/AppBar', '@mui/material/Toolbar', '@mui/material/List', '@mui/material/CssBaseline', '@mui/material/Typography', '@mui/material/Divider', '@mui/material/IconButton', '@mui/icons-material/Menu', '@mui/icons-material/ChevronLeft', '@mui/icons-material/ChevronRight', '@mui/material/ListItem', '@mui/material/ListItemButton', '@mui/material/ListItemIcon', '@mui/material/ListItemText', '@mui/icons-material/MoveToInbox', '@mui/icons-material/Mail', '@mui/icons-material/Dashboard', '@mui/icons-material/People', '@mui/icons-material/Event', '@mui/icons-material/MedicalServices', '@mui/icons-material/Settings', '@mui/material/Card', '@mui/material/CardContent', '@mui/material/Grid', '@mui/x-data-grid']
    },
    build: {
        commonjsOptions: {
            include: [/node_modules/,
                '@mui/x-data-grid'
            ]
        }
    }
});
