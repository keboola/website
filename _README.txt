SETUP
=============
Dokumentace jekylrb:
http://jekyllrb.com/docs/home/

Ruby:
http://www.ruby-lang.org/en/downloads/

RubyGems:
https://rubygems.org/pages/download

Install jekyll:
$ gem install jekyll



RUN
=============
Ve složce projektu spustit:
sudo jekyll serve --watch

jakékoliv uložení se poté generuje automaticky do složky:
_site

a "live" web lzde vidět na lokále zde:
http://127.0.0.1:4000/


DOCKER
=============
docker run --rm --label=jekyll --name=jekyll --volume=$(pwd):/srv/jekyll   -it -p 4000:4004 jekyll/jekyll jekyll serve

  
export JEKYLL_VERSION=3.8
docker run --rm \
  --volume="$PWD:/srv/jekyll" \
  -it -p 4000:4004 jekyll/jekyll:$JEKYLL_VERSION \
  jekyll server


CONFIG
=============
Všechno nastavení je v _config.yml pro změnu a projevení změn je potřeba stopnout "watch" a spustit ho znovu.

Všechny názvy s podtržítkem na začátku se nekopírují do výsledného webu.

Žádné změny nelze dělat v "produkční" složce, takže jakýkoliv obrázek nakopírovaný jen tam se automaticky maže.