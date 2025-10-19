#!/usr/bin/env bash
set -euo pipefail

THEME_DIR="wp-content/themes/mendrix-consultancy-pro"
DIST_ZIP="mendrix-consultancy-pro.zip"
FONTS_DIR="$THEME_DIR/assets/fonts"
CSS_FILE="$THEME_DIR/assets/css/local-fonts.css"
USER_AGENT="Mozilla/5.0"

mkdir -p "$FONTS_DIR"

declare -A families=(
  ["Inter"]="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
  ["Playfair Display"]="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap"
)

for family in "${!families[@]}"; do
  url="${families[$family]}"
  css=$(curl -fsSL -A "$USER_AGENT" "$url")
  weight=""
  while IFS= read -r line; do
    if [[ $line =~ font-weight:([0-9]+) ]]; then
      weight="${BASH_REMATCH[1]}"
    fi
    if [[ $line =~ url\((https:[^\)]+)\) ]]; then
      font_url="${BASH_REMATCH[1]}"
      safe_name=$(echo "$family" | tr ' ' '-' | tr '[:upper:]' '[:lower:]')
      file="$safe_name-$weight.woff2"
      curl -fsSL "$font_url" -o "$FONTS_DIR/$file"
    fi
  done <<< "$css"
done

echo "Fonts downloaded to $FONTS_DIR"

rm -f "$DIST_ZIP"
zip -r "$DIST_ZIP" "$THEME_DIR" -x "*.DS_Store" "*.git*"

echo "Created $DIST_ZIP"
