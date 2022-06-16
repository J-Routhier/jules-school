# Julz School

## Setup

- Rename `sample.env.php` to `.env.php` and configure your environment.
- `npm install`

### Environments

- `.env.php`
- `config.php`
  - SITE_URL
  - DB_CONNECTION

### Local

### Production

## Deployment

Before deployment, run `npx tailwindcss -i ./assets/css/styles.css -o ./dist/output.css --minify`

## Usage

### Assets

Watch files with: `npx tailwindcss -i ./assets/css/styles.css -o ./dist/output.css --watch`

## API

- `create_model( $name, $args )`
- `update_model( $name, $args )`
- `delete_model( $id, $softDelete = true )`
- `populatePage()`

### `lib/db.php`

- `db_insert()`
- `db_update()`

## ROUTES

- `routes.php`
- `controller.php`

1. No side effects
2. Everything is a function
3. functions should only do one thing

```php
$str = "hello";

function format_greeting_for_someone( $who ) {
    return "Hello, ${str}!";
}

function validate_all_fields_from_request( $request ) {
    $errors = [];
    foreach( $request->allFields() as $field ) {
        $error = validate_form_field( $field );
        if( !is_null($error) ) $errors[] = $error;
    }
    return $errors;
}

/**
 * Returns error or null if valid
 **/
function validate_form_field( $field, $input ) {
    ///validation
    // $rule = $config['validation_rules'][$field];
    return apply_rule($rule, $input);
}


$config = [
    'validation_rules' => [
        'email' => '/(.)@.\.com/';
        'name' => ['required'];
    ]
]

```
