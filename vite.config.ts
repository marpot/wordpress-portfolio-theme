import { defineConfig } from "vite";

export default defineConfig({
  server: {
    host: true,
    port: 5173,
    strictPort: true
  },

  build: {
    outDir: "dist",
    emptyOutDir: true,

    rollupOptions: {
      input: "./js/main.ts",   // <- MUSI być .ts
      output: {
        entryFileNames: "assets/main.js",
        assetFileNames: "assets/[name][extname]"
      }
    }
  }
});