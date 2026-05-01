#!/bin/bash
# Generate sitemap.xml for drarunsaroha.com
# Scans all index.php files and blog posts

SITE_ROOT="/Users/bp/Desktop/Arun Saroha.com"
SITEMAP="$SITE_ROOT/sitemap.xml"
BASE_URL="https://drarunsaroha.com"
TODAY=$(date +%Y-%m-%d)

# Start XML
cat > "$SITEMAP" << 'HEADER'
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
HEADER

# 1. Homepage
cat >> "$SITEMAP" << EOF
  <url>
    <loc>${BASE_URL}/</loc>
    <lastmod>${TODAY}</lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
  </url>
EOF

# 2. Main pages (root .php files, excluding generators and index.php)
for page in about services contact blog international-patients; do
  cat >> "$SITEMAP" << EOF
  <url>
    <loc>${BASE_URL}/${page}</loc>
    <lastmod>${TODAY}</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
EOF
done

# 3. Condition/service landing pages (top-level directories with index.php)
# These are the main condition pages like /brain-tumor/, /herniated-disc/, etc.
CONDITION_DIRS=$(find "$SITE_ROOT" -maxdepth 2 -name "index.php" \
  -not -path "$SITE_ROOT/index.php" \
  -not -path "*/.git/*" \
  -not -path "*/scratch/*" \
  -not -path "*/assets/*" \
  -not -path "*/includes/*" \
  -not -path "*/blog/*" \
  | sed "s|$SITE_ROOT/||" | sed 's|/index\.php$||' | sort)

for dir in $CONDITION_DIRS; do
  cat >> "$SITEMAP" << EOF
  <url>
    <loc>${BASE_URL}/${dir}/</loc>
    <lastmod>${TODAY}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.9</priority>
  </url>
EOF
done

# 4. Location pages (state-level: condition/state/)
STATE_PAGES=$(find "$SITE_ROOT" -mindepth 3 -maxdepth 3 -name "index.php" \
  -not -path "*/.git/*" \
  -not -path "*/scratch/*" \
  -not -path "*/assets/*" \
  -not -path "*/includes/*" \
  -not -path "*/blog/*" \
  | sed "s|$SITE_ROOT/||" | sed 's|/index\.php$||' | sort)

for dir in $STATE_PAGES; do
  cat >> "$SITEMAP" << EOF
  <url>
    <loc>${BASE_URL}/${dir}/</loc>
    <lastmod>${TODAY}</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>
EOF
done

# 5. City-level pages (condition/state/city/)
CITY_PAGES=$(find "$SITE_ROOT" -mindepth 4 -maxdepth 4 -name "index.php" \
  -not -path "*/.git/*" \
  -not -path "*/scratch/*" \
  -not -path "*/assets/*" \
  -not -path "*/includes/*" \
  -not -path "*/blog/*" \
  | sed "s|$SITE_ROOT/||" | sed 's|/index\.php$||' | sort)

for dir in $CITY_PAGES; do
  cat >> "$SITEMAP" << EOF
  <url>
    <loc>${BASE_URL}/${dir}/</loc>
    <lastmod>${TODAY}</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
  </url>
EOF
done

# 6. Blog posts
for blog in "$SITE_ROOT"/blog/*.php; do
  slug=$(basename "$blog" .php)
  cat >> "$SITEMAP" << EOF
  <url>
    <loc>${BASE_URL}/blog/${slug}</loc>
    <lastmod>${TODAY}</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>
EOF
done

# Close XML
echo "</urlset>" >> "$SITEMAP"

# Count URLs
TOTAL=$(grep -c "<loc>" "$SITEMAP")
echo "✅ Sitemap generated with $TOTAL URLs at $SITEMAP"
