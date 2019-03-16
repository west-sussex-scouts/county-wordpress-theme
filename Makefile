
dep: package.json
	yarn install
	rm -rf scss/vendor/bootstrap || true
	cp -a node_modules/bootstrap/scss scss/vendor/bootstrap