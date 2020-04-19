#!/usr/bin/env bash
root=$(echo $1 | sed -e "s/.jpg//")
OW=$(identify -format "%w" ${1})
OH=$(identify -format "%h" ${1})

convert $1 -resize 300x ${root}-300.jpg
convert $1 -resize 768x ${root}-768.jpg
convert $1 -resize 1000x ${root}-1000.jpg
convert $1 -resize 1024x ${root}-1024.jpg
convert $1 -resize 2048x ${root}-2048.jpg
convert $1 -resize 500x ${root}-500.jpg
convert $1 -resize 600x ${root}-600.jpg
echo "<img width=\"${OW}\" height=\"${OH}\" src=\"<?php echo get_template_directory_uri() . '/assets/images/stock/${root}-2048.jpg'; ?>\" class=\"bg\" alt=\"\" srcset=\"<?php echo get_template_directory_uri() . '/assets/images/stock/${root}-2048.jpg'; ?> 2048w, <?php echo get_template_directory_uri() . '/assets/images/stock/${root}-300.jpg'; ?> 300w, <?php echo get_template_directory_uri() . '/assets/images/stock/${root}-768.jpg'; ?> 768w, <?php echo get_template_directory_uri() . '/assets/images/stock/${root}-1024.jpg'; ?> 1024w, <?php echo get_template_directory_uri() . '/assets/images/stock/${root}-1000.jpg'; ?> 1000w, <?php echo get_template_directory_uri() . '/assets/images/stock/${root}-500.jpg'; ?> 500w, <?php echo get_template_directory_uri() . '/assets/images/stock/${root}-600.jpg'; ?> 600w\" sizes=\"(max-width: 2048px) 100vw, 2048px\">"
