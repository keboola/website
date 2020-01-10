---

---
# KEBOOLA

[keboola](https://keboola.com)

## Docker run

[more info](https://github.com/envygeeks/jekyll-docker)

#### Usage

```sh
export JEKYLL_VERSION=3.8
docker run --rm \
  --volume="$PWD:/srv/jekyll" \
  -it -p 4000:4004 jekyll/jekyll:$JEKYLL_VERSION \
  jekyll server --incremental --watch
```

```sh
export JEKYLL_VERSION=3.8
docker run --rm \
  --volume="$PWD:/srv/jekyll" \
  -it -p 4000:4004 jekyll/jekyll:$JEKYLL_VERSION \
  jekyll server --watch
```

#### Compile less

```sh
docker run --rm -v `pwd`:/app -ti appleboy/node-less \
	--plugin=less-plugin-clean-css \
	less/style.less > css/style.css
```

#### IP

    http://127.0.0.1:4000/





#### Localhost server start
```sh
docker-compose run --service-ports local
```

#### Web build
```sh
docker-compose run --service-ports web
```

#### Update Jekyll dependencies
```sh
docker-compose run update
```

#### Compile less
```sh
docker-compose run less
```

### Uglify JS
```sh
docker-compose run uglifyjs
```


#### IP
```
http://127.0.0.1:4000/
```




