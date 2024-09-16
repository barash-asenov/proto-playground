### Test


> Generate protos

```sh
protoc -I=./protos --php_out=src ./protos/addressbookv1.proto
protoc -I=./protos --go_out=. ./protos/addressbookv1.proto
```

> Go into docker
```sh
docker run -it --volume ./:/app composer /bin/bash

# when inside

composer install
```

> Check the raw data
```sh
cat ./phone.pb | hexdump -C
```
