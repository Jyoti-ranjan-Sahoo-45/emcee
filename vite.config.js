import react from '@vitejs/plugin-react'
import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
// https://vite.dev/config/
export default defineConfig({
  base: process.env.VITE_WP_BUILD === 'true' ? '/wp-content/themes/trupti-emcee/dist/' : '/',
  plugins: [tailwindcss(), react()],
})
