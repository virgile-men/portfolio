# AGENTS.md

## Cursor Cloud specific instructions

This repository is a single static portfolio website built with **Astro 4** and deployed to **Cloudflare** (static assets via `wrangler.jsonc`). It uses **npm** (see `package-lock.json`). There is no backend, database, or external service.

### Services
- **Astro dev server** — the only service. Start with `npm run dev` (alias `npm start`), serves on `http://localhost:4321/`. This is what you run for development.

### Commands (defined in `package.json`)
- Dev: `npm run dev`
- Build (static, outputs to `dist/`): `npm run build`
- Preview built output: `npm run preview`

### Notes / gotchas
- There is **no lint and no automated test** setup in this repo (no ESLint/Prettier config, no test framework). Do not assume `npm test`/`npm run lint` exist.
- `npx astro check` is NOT configured: it prompts interactively to install `@astrojs/check`. Type-checking otherwise happens as part of `npm run build`.
- Optional-only tooling: Cloudflare `wrangler` (deployment/emulation, not in deps — use `npx wrangler`) and a LaTeX toolchain for regenerating `public/docs/*.tex` (the compiled PDF is already committed). Neither is needed to develop the site.
