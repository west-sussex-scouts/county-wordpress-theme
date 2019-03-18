#!/usr/bin/env bash
zip -r9 county-wordpress-theme.zip *.php LICENSE.MD style.css vendor/ assets/ template-parts/
sha256sum county-wordpress-theme.zip > county-wordpress-theme.zip.sha256
