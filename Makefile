
dep: package.json
	yarn install --dev
	rm -rf scss/vendor/bootstrap || true
	cp -a node_modules/bootstrap/scss scss/vendor/bootstrap

build: index.scss scripts/index.js
	node_modules/.bin/sass index.scss:index.css --style compressed
	node_modules/.bin/webpack

watch: index.scss
	node_modules/.bin/sass --watch index.scss index.css

minify:
