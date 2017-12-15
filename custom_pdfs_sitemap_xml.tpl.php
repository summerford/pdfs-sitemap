<?php global $base_url, $base_path; ?>
<?php print '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <?php foreach($items as $item) : ?>
  <url>
    <loc><?php print htmlentities($base_url.$base_path.$item->uri, ENT_QUOTES, 'UTF-8'); ?></loc>
    <lastmod><?php print date ("Y-m-d H:i:s.", filemtime($item->uri)); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.8</priority>
  </url>
  <?php endforeach ?>
</urlset>