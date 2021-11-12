people-api-php
================

Connector to interact with the People API

### Example Usage

```php
<?php
use Waynestate\Api\People;

// People API
$people = new People(PEOPLE_API_KEY);

// List of releases
$releases = $people->request('releases', array('perPage' => '2'));
var_dump($releases);

// Individual Release
$release = $people->request('releases', array('id' => '1'));
var_dump($release);
```
