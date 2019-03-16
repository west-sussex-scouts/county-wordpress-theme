
dep: package.json
	yarn install --dev

build: src/scss src/js/header.js src/js/footer.js
	node_modules/.bin/sass src/scss/index.scss:assets/css/index.css --style compressed
	node_modules/.bin/webpack --mode=production

watch: src/scss
	node_modules/.bin/sass --watch src/scss/index.scss:assets/css/index.css
