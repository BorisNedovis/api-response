# Api Response

## Install

To install through Composer, by run the following command:

``` bash
composer require borisnedovis/api-response
```

And add provider in app.php:

``` php
BorisNedovis\ApiResponse\Providers\ApiResponseServiceProvider::class
```

Use:

- Required parameter $data

``` php
return response()->api($this->data, $this->errors, $this->statusCode);
```

Result:

``` json
{"data":{...},"errors":[],"status":200}
```


