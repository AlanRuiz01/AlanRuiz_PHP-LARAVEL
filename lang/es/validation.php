<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute sólo debe contener letras.',
    'alpha_dash'           => 'El campo :attribute sólo debe contener letras, números y guiones.',
    'alpha_num'            => 'El campo :attribute sólo debe contener letras y números.',
    'array'                => 'El campo :attribute debe ser un conjunto.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute tiene que estar entre :min - :max.',
        'file'    => 'El campo :attribute debe pesar entre :min - :max kilobytes.',
        'string'  => 'El campo :attribute tiene que tener entre :min - :max caracteres.',
        'array'   => 'El campo :attribute tiene que tener entre :min - :max ítems.',
    ],
    'boolean'              => 'El campo El campo :attribute debe tener un valor verdadero o falso.',
    'confirmed'            => 'La confirmación de El campo :attribute no coincide.',
    'date'                 => 'El campo :attribute no es una fecha válida.',
    'date_format'          => 'El campo :attribute no corresponde al formato :format.',
    'different'            => 'El campo :attribute y :other deben ser diferentes.',
    'digits'               => 'El campo :attribute debe tener :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe tener entre :min y :max dígitos.',
    'dimensions'           => 'Las dimensiones de la imagen El campo :attribute no son válidas.',
    'distinct'             => 'El campo El campo :attribute contiene un valor duplicado.',
    'email'                => 'El campo :attribute no es un correo válido',
    'exists'               => 'El campo :attribute es inválido.',
    'file'                 => 'El campo El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo El campo :attribute es obligatorio.',
    'gt'                   => [
        'numeric' => 'El campo El campo :attribute debe ser mayor que :value.',
        'file'    => 'El campo El campo :attribute debe tener más de :value kilobytes.',
        'string'  => 'El campo El campo :attribute debe tener más de :value caracteres.',
        'array'   => 'El campo El campo :attribute debe tener más de :value elementos.',
    ],
    'gte'                  => [
        'numeric' => 'El campo El campo :attribute debe ser como mínimo :value.',
        'file'    => 'El campo El campo :attribute debe tener como mínimo :value kilobytes.',
        'string'  => 'El campo El campo :attribute debe tener como mínimo :value caracteres.',
        'array'   => 'El campo El campo :attribute debe tener como mínimo :value elementos.',
    ],
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute es inválido.',
    'in_array'             => 'El campo El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El campo :attribute debe ser un dirección IPv4 válida',
    'ipv6'                 => 'El campo :attribute debe ser un dirección IPv6 válida.',
    'json'                 => 'El campo El campo :attribute debe tener una cadena JSON válida.',
    'lt'                   => [
        'numeric' => 'El campo El campo :attribute debe ser menor que :value.',
        'file'    => 'El campo El campo :attribute debe tener menos de :value kilobytes.',
        'string'  => 'El campo El campo :attribute debe tener menos de :value caracteres.',
        'array'   => 'El campo El campo :attribute debe tener menos de :value elementos.',
    ],
    'lte'                  => [
        'numeric' => 'El campo El campo :attribute debe ser como máximo :value.',
        'file'    => 'El campo El campo :attribute debe tener como máximo :value kilobytes.',
        'string'  => 'El campo El campo :attribute debe tener como máximo :value caracteres.',
        'array'   => 'El campo El campo :attribute debe tener como máximo :value elementos.',
    ],
    'max'                  => [
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'file'    => 'El campo :attribute no debe ser mayor que :max kilobytes.',
        'string'  => 'El campo :attribute no debe ser mayor que :max caracteres.',
        'array'   => 'El campo :attribute no debe tener más de :max elementos.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo con formato: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo con formato: :values.',
    'min'                  => [
        'numeric' => 'El tamaño de El campo :attribute debe ser de al menos :min.',
        'file'    => 'El tamaño de El campo :attribute debe ser de al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute debe tener al menos :min elementos.',
    ],
    'not_in'               => 'El campo :attribute es inválido.',
    'not_regex'            => 'El formato dEl campo El campo :attribute no es válido.',
    'numeric'              => 'El campo :attribute debe ser numérico.',
    'present'              => 'El campo El campo :attribute debe estar presente.',
    'regex'                => 'El formato de El campo :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio' ,
    'required_if'          => 'El campo El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless'      => 'El campo El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with'        => 'El campo El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo El campo :attribute es obligatorio cuando :values está presente.',
    'required_without'     => 'El campo El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo El campo :attribute es obligatorio cuando ninguno de :values estén presentes.',
    'same'                 => 'El campo :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El tamaño de El campo :attribute debe ser :size.',
        'file'    => 'El tamaño de El campo :attribute debe ser :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'string'               => 'El campo El campo :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El El campo :attribute debe ser una zona válida.',
    'unique'               => 'El campo :attribute ya ha sido registrado.',
    'uploaded'             => 'Subir El campo :attribute ha fallado.',
    'url'                  => 'El formato El campo :attribute es inválido.',

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
        'password' => [
            'min' => 'La El campo :attribute debe contener más de :min caracteres',
        ],
        'email'    => [
            'unique' => 'El El campo :attribute ya ha sido registrado.',
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
        'name'                  => 'nombre',
        'username'              => 'usuario',
        'email'                 => 'correo electrónico',
        'first_name'            => 'nombre',
        'last_name'             => 'apellido',
        'password'              => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'city'                  => 'ciudad',
        'country'               => 'país',
        'address'               => 'dirección',
        'phone'                 => 'teléfono',
        'mobile'                => 'móvil',
        'age'                   => 'edad',
        'sex'                   => 'sexo',
        'gender'                => 'género',
        'year'                  => 'año',
        'month'                 => 'mes',
        'day'                   => 'día',
        'hour'                  => 'hora',
        'minute'                => 'minuto',
        'second'                => 'segundo',
        'title'                 => 'título',
        'content'               => 'contenido',
        'body'                  => 'contenido',
        'description'           => 'descripción',
        'excerpt'               => 'extracto',
        'date'                  => 'fecha',
        'time'                  => 'hora',
        'subject'               => 'asunto',
        'message'               => 'mensaje',
    ],
];