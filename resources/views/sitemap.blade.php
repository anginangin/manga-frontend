<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($latestUpdate as $item)
        <url>
            <loc>{{ url('/manga/' . $item->slug) }}</loc>
            <lastmod>{{ $item->chapters[0]->created_at->tz('Asia/Jakarta')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
