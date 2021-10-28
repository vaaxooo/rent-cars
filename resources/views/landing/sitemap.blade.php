{{ request()->header('Content-Type : text/xml') }}
        <?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($cars as $car)
    <url>
        <loc>{{ url($car->slug) }}</loc>
        <lastmod>{{ $car->updated_at->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    @endforeach
</urlset>