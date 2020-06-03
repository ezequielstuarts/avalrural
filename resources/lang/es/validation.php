<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL válida.',
    'after'                => 'El :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El :attribute solo puede contener letras.',
    'alpha_dash'           => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num'            => 'El :attribute solo puede contener letras y números.',
    'array'                => 'El :attribute debe ser un array.',
    'before'               => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El confirmación de :attribute no coincide.',
    'date'                 => 'El :attribute no corresponde con una fecha válida.',
    'date_equals'          => 'El :attribute debe ser una fecha igual a :date.',
    'date_format'          => 'El :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'Los campos :attribute y :other deben ser diferentes.',
    'digits'               => 'El :attribute debe ser un número de :digits dígitos.',
    'digits_between'       => 'El :attribute debe contener entre :min y :max dígitos.',
    'dimensions'           => 'El :attribute tiene dimensiones de imagen inválidas.',
    'distinct'             => 'El :attribute tiene un valor duplicado.',
    'email'                => 'El :attribute debe ser una dirección de correo válida.',
    'ends_with'            => 'El :attribute debe finalizar con alguno de los siguientes valores: :values',
    'exists'               => 'El :attribute seleccionado no existe.',
    'file'                 => 'El :attribute debe ser un archivo.',
    'filled'               => 'El :attribute debe tener un valor.',
    'gt'                   => [
        'numeric' => 'El :attribute debe ser mayor a :value.',
        'file'    => 'El archivo :attribute debe pesar más de :value kilobytes.',
        'string'  => 'El :attribute debe contener más de :value caracteres.',
        'array'   => 'El :attribute debe contener más de :value elementos.',
    ],
    'gte'                  => [
        'numeric' => 'El :attribute debe ser mayor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o más kilobytes.',
        'string'  => 'El :attribute debe contener :value o más caracteres.',
        'array'   => 'El :attribute debe contener :value o más elementos.',
    ],
    'image'                => 'La imagen debe ser de tipo PNG, JPG, JPEG',
    'in'                   => 'El :attribute es inválido.',
    'in_array'             => 'El :attribute no existe en :other.',
    'integer'              => 'El :attribute debe ser un número entero.',
    'ip'                   => 'El :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El :attribute debe ser una cadena de texto JSON válida.',
    'lt'                   => [
        'numeric' => 'El :attribute debe ser menor a :value.',
        'file'    => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'string'  => 'El :attribute debe contener menos de :value caracteres.',
        'array'   => 'El :attribute debe contener menos de :value elementos.',
    ],
    'lte'                  => [
        'numeric' => 'El :attribute debe ser menor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o menos kilobytes.',
        'string'  => 'El :attribute debe contener :value o menos caracteres.',
        'array'   => 'El :attribute debe contener :value o menos elementos.',
    ],
    'max'                  => [
        'numeric' => 'El :attribute no debe ser mayor a :max.',
        'file'    => 'El archivo :attribute no debe pesar más de :max kilobytes.',
        'string'  => 'El :attribute no debe contener más de :max caracteres.',
        'array'   => 'El :attribute no debe contener más de :max elementos.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El :attribute debe contener al menos :min caracteres.',
        'array'   => 'El :attribute debe contener al menos :min elementos.',
    ],
    'not_in'               => 'El :attribute seleccionado es inválido.',
    'not_regex'            => 'El formato del :attribute es inválido.',
    'numeric'              => 'El :attribute debe ser un número.',
    'password'             => 'La contraseña es incorrecta.',
    'present'              => 'El :attribute debe estar presente.',
    'regex'                => 'El formato del :attribute es inválido.',
    'required'             => 'Debe completar el campo :attribute.',
    'required_if'          => 'El :attribute es obligatorio cuando el :other es :value.',
    'required_unless'      => 'El :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El :attribute es obligatorio cuando :values están presentes.',
    'required_without'     => 'El :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El :attribute debe contener :size caracteres.',
        'array'   => 'El :attribute debe contener :size elementos.',
    ],
    'starts_with'          => 'El :attribute debe comenzar con uno de los siguientes valores: :values',
    'string'               => 'El :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El :attribute debe ser una zona horaria válida.',
    'unique'               => 'El valor del :attribute ya está en uso.',
    'uploaded'             => 'El :attribute no se pudo subir.',
    'url'                  => 'El formato del :attribute es inválido.',
    'uuid'                 => 'El :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'first_name' => 'nombre',
        'last_name' => 'apellido',
        'date' => 'fecha',
        "title" => 'titulo',
        "img_miniature" => 'imagen preview',
        "img_noticia" => 'imagen completa'
    ],

];
