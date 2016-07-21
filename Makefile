all: all-favicons apple-touch-icons.html

favicon.svg: logo.svg
	cp $< $@

favicon%.png: favicon.svg
	inkscape --export-width $* --export-height $* --export-png=$@ $<
	optipng $@

favicon558x270.png: favicon270.png
	convert $< -gravity center -extent 558x270 -background xc:transparent $@
	optipng $@

favicon.ico: favicon16.png favicon32.png favicon48.png
	convert $^ $@

FAVICON_SIZES := 16 24 48 64 195 196 270 558 

apple-touch-icons.html:
	@rm -f $@
	@for size in $(FAVICON_SIZES); do \
		printf '<link rel="shortcut icon" sizes="%sx%s" href="favicon%s.png">\n' $$size $$size $$size >> $@; \
	done
	@printf '<line rel=apple-touch-icon-precomposed href="favicon152.png">\n' \
		>> $@;
	@echo "Created $@"

all-favicons: favicon558x270.png favicon.ico $(FAVICON_SIZES:%=favicon%.png)

.PHONY: all-favicons all
