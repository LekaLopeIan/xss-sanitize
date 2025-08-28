# xss-sanitasi
Contoh sederhana sanitasi XSS di PHP menggunakan htmlspecialchars.

- src/sanitize.php : fungsi e() untuk escape output.
- public/index.php : contoh form dan penggunaan.

Cara pakai:
1. Clone repo
2. Arahkan webroot ke folder public/ (mis. dengan built-in PHP server: php -S localhost:8000 -t public)
3. Buka http://localhost:8000
