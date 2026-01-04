import { defineConfig } from 'astro/config';

export default defineConfig({
  site: 'https://virgile.men',
  compressHTML: true,
  build: {
    inlineStylesheets: 'auto'
  },
  vite: {
    build: {
      cssMinify: true
    }
  }
});
