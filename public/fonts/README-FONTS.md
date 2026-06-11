# Fonts to download (self-hosted)

The new theme expects these six files in `public/fonts/`. Until they're added,
the site falls back to Georgia (headings) / system sans / Courier New — usable but not final.

Easiest source: https://gwfh.mranftl.com (google-webfonts-helper) — pick the font,
select "Modern Browsers" (woff2 only), download, then rename to match:

| File expected               | Font / variant                              |
|-----------------------------|---------------------------------------------|
| Fraunces-Variable.woff2     | Fraunces — variable, normal (wght 100–900)  |
| Fraunces-Italic-Variable.woff2 | Fraunces — variable, italic              |
| Karla-Variable.woff2        | Karla — variable, normal (wght 200–800)     |
| Karla-Italic-Variable.woff2 | Karla — variable, italic                    |
| CourierPrime-Regular.woff2  | Courier Prime — 400                         |
| CourierPrime-Bold.woff2     | Courier Prime — 700                         |

Alternative: download TTF/variable files from https://fonts.google.com and convert
to woff2 (e.g. `npx ttf2woff2` or fonttools).

All are licensed under the SIL Open Font License — fine to self-host commercially.
