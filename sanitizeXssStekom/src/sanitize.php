<?php
// src/sanitize.php
declare(strict_types=1);

/**
 * Sanitasi teks untuk output ke HTML menggunakan htmlspecialchars.
 *
 * @param string|null $input
 * @return string sanitized string (kosong jika null)
 */
function e(?string $input): string
{
    // ENT_QUOTES -> escape ' dan "
    // ENT_SUBSTITUTE -> ganti karakter yang tidak valid dengan � (agar tidak error)
    // 'UTF-8' -> encoding yang direkomendasikan
    // double_encode=false -> jangan double-encode &amp; menjadi &amp;amp;
    return htmlspecialchars($input ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8', false);
}
