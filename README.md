# Light set of tools

## Config

Working with `ini` config files. The package search `config.ini` file near client code file. Config example:
```
[redis]
scheme = tcp
host = redis
port = 6379

[mongo]
scheme = mongodb
host = mongo
port = 27017
```

Client code example:
```
<?php
require __DIR__ . '/vendor/autoload.php';
use \Azatnizam\Tools\Config;

print Config::get('mongo')['scheme'];

```

## License
The MIT License (MIT)